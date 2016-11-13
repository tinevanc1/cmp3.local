/**
 * Created by tine on 30/10/16.
 */
var registerNavigationToggleListeners =  function () {
    var toggles = document.querySelectorAll('.navigation-toggle');

    if (toggles != null && toggles.length > 0) {
        var toggle = null;

        for (var i = 0; i < toggles.length; i++) {
            toggle = toggles[i];
            toggle.addEventListener('click', function (ev) {
                ev.preventDefault();

                document.querySelector('body').classList.toggle(this.dataset.navtype);

                return false;
            });
        }
    }
};
var registerWindowListeners = function () {
    window.addEventListener('resize', function (ev) {
        if (document.querySelector('body').classList.contains('offcanvas-open')) {
            document.querySelector('body').classList.remove('offcanvas-open');
        }

        if (document.querySelector('body').classList.contains('headernav-open')) {
            document.querySelector('body').classList.remove('headernav-open');
        }
    });
};
function initMap() {
    var mapDiv = document.getElementById('googleMap');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: 44.540, lng: -78.546},
        zoom: 8
    });
}

registerNavigationToggleListeners();
registerWindowListeners();

var hart = document.getElementById("like");
var count = 0;
hart.addEventListener("click", function(){
    count ++;
    document.getElementById("likesAantal").innerHTML = count + (count == 1 ?  " people" :  " peoples ") + " likes this"
}, false);