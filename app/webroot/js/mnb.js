//
// Fills a string containing special templating syntax with the data provided.
//
// Ex:
//    tmpl = "${name} got a ${grade} in ${course}.";
//    data = { name: "John", grade: "B", course: "Plant Pathology" };
//    tmpl.template(data); // outputs "John got a B in Plant Pathology."
//
String.prototype.template = function(data) {
    var regex = null,
      completed = this.toString();
    for (el in data) {
      regex = new RegExp('\\${' + el + '}', 'g');
      completed = completed.replace(regex, data[el]);
    }
    return completed.toString();
};

MNB = function(){
    this.playlistTmpl = '<div class="playlist" id="${showDate}">${tracks}</div>';
    this.trackTmpl    = '<span class="track">${artist} &mdash; ${title}</span><br />';
    this.loadPlaylists = function(){
        var mnb = this;
        $.ajax({
            url: "/shows/index.json",
            dataType: "json",
            success: function(data){
                var playlists = $("#playlists"), tracks = null, show, track;
                for(var i=1; i<data.length; i++){ // start at 1 because first has already been printed by PHP
                    show = data[i];
                    playlists.append(mnb.playlistTmpl.template({
                        showDate: show["Show"]["date"],
                        tracks: show["Show"]["text"]
                    }).replace(/\n/g, "<br>"));
                }
            }
        });
        $('#shows').change(function(){
           var changeTo = $(this).val();
           $(".playlist.current").removeClass('current');
           $('#'+changeTo).addClass('current');
        });
    };
    
    // thanks to Chris Coyier for this next function: http://css-tricks.com/snippets/javascript/shuffle-array/
    this.shuffleArray = function(o){
        for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
        return o;
    }
    this.loadAlbumCovers = function(){
        var mnb = this;
        $.ajax({
            url: "/album_covers/index.json",
            dataType: "json",
            success: function(data){
                var slides = "";
                data = mnb.shuffleArray(data);
                for(var k=0; k<data.length; k+=5){
                    var slide = '<div class="slide">${covers}</div>';
                    var cover = '<div class="cover"><img src="${filepath}" alt="${album} by ${artist}" width="140"></div>';
                    var covers = "";
                    for(var c=0; c<5; c++){
                        if(k+c < data.length){
                            covers += cover.template(data[k+c]["AlbumCover"]);
                        }
                    }
                    slides += slide.template({covers: covers});
                }
                console.log(slides);
                $("#album_covers .slides_container").append(slides);
                
                $("#album_covers").slides({
                    generatePagination: false,
                    play: 5000
                });
            }
        });
    }
}

$(function(){
    var mnb = new MNB();
    mnb.loadPlaylists();
    mnb.loadAlbumCovers();
});
