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
    this.loadPlaylists = function(){
        $.ajax({
            url: "/shows/index.json",
            dataType: "json",
            success: function(data){
                console.log(data);
            }
        });
    }
}

$(function(){
    var mnb = new MNB();
    mnb.loadPlaylists();
});
