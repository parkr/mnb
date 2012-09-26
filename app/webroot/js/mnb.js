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
                for(var i=0; i<data.length; i++){
                    show = data[i];
                    tracks = "";
                    for(var t=0; t<show["TrackListing"].length; t++){
                        tracks += mnb.trackTmpl.template(show["TrackListing"][t]);
                    }
                    playlists.append(mnb.playlistTmpl.template({
                        showDate: show["Show"]["date"],
                        tracks: tracks
                    }));
                }
            }
        });
    }
}

$(function(){
    var mnb = new MNB();
    mnb.loadPlaylists();
});
