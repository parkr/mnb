(function(){
    
    String.prototype.fastTrim = function(){
        var str = this.replace(/^\s+/, '');
        for (var i = str.length - 1; i >= 0; i--) {
            if (/\S/.test(str.charAt(i))) {
                str = str.substring(0, i + 1);
                break;
            }
        }
        return str;
    }
    
    document.onreadystatechange = function(){
        if(this.readyState == "complete"){
            var playlists = document.getElementById("playlists"), output = new Array(), _el, outputIndex = -1;
            var _ref = playlists.childNodes;
            for(var i=0; i < _ref.length; i++){
                _el = _ref[i];
                if(_el.textContent.replace(/\s/g , '') !== ""){
                    var date = new Date(_el.textContent.replace(/:/g, ''));
                    //console.log(_el.textContent, date, Object.prototype.toString.call(date));
                    if ( Object.prototype.toString.call(date) === "[object Date]" ) {
                        if ( isNaN( date.getTime() ) ) {
                            if(typeof output[outputIndex].songs !== "undefined"){
                                output[outputIndex].songs.push(_el.textContent.fastTrim());
                            }else{
                                console.warn(_el.textContent.fastTrim() + " could not be added to output at outputIndex=" + outputIndex, output);
                            }
                        } else {
                            // valid date
                            outputIndex++;
                            output.push({
                                date: _el.textContent.fastTrim(),
                                songs: new Array()
                            });
                        }
                    } else {
                        if(typeof output[outputIndex] !== "undefined"){
                            output[outputIndex].songs.push(_el.textContent.fastTrim());
                        }else{
                            console.warn(_el.textContent.fastTrim() + " could not be added to output at outputIndex=" + outputIndex, output);
                        }
                    }
                }
            }
            // Reset playlists element
            playlists.textContent = "";
            var playlist = document.createElement('div'), selector = document.createElement('select'), option, header = document.createElement('h3');
            
            // Add header
            header.textContent = "Playlists of Yore";
            playlists.appendChild(header);
            
            // Create date selector
            for(var k=0; k<output.length; k++){
                option = document.createElement("option");
                if(k==0){
                    option.selected = "selected";
                }
                option.value = k;
                option.textContent = output[k].date;
                selector.appendChild(option);
            }
            selector.onchange = function(){
                playlist.textContent = "";
                var index = this.options[this.selectedIndex].value, songs = output[index].songs, list = document.createElement("ol"), item;
                for(var j=0; j<songs.length; j++){
                    item = document.createElement("li");
                    item.textContent = songs[j].toString();
                    list.appendChild(item);
                }
                playlist.appendChild(list);
            }
            playlists.appendChild(selector);
            
            // Add playlist container
            playlist.id = "mnb_playlist";
            playlists.appendChild(playlist);
            selector.onchange();
            console.log(output);
            window.playlistOutput = output;
        }
    }
})();