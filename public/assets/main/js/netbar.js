function mmoEl(name) {
    if (document.getElementById) {
        return document.getElementById(name);
    } else if (document.all) {
        return document.all[name];
    } else if (document.layers) {
        return document.layers[name];
    }
    return false;
}

function mmoJump(el) {
    window.location.href = el.options[el.selectedIndex].value;
}

var mmo_tickDly = 3000;
var mmo_tickFadeDly = 50;
var mmo_tickFadeTicks = 10;
var mmoTickEl = null;
var mmoTickItems = null;
var mmoTickIdx = 0;
var mmoTickState = 0;
var mmoTickFade = 1;
var mmoTickHalt = false;

function mmoTicker() {
    var f = 0;
    try {
        mmoTickEl = mmoEl('mmoNewsticker');
        if (mmoTickEl) {
            mmoTickItems = mmoTickEl.getElementsByTagName("li");
            if (mmoTickItems) {
                f = 1;
            }
        }
    } catch (e) {
        f = 0;
    }
    if (!f) {
        setTimeout(mmoTicker, 10);
        return;
    }
    setTimeout(mmoTicknext, 0);
}

function mmoTicknext() {
    if (mmoTickHalt) {
        mmoTickAlphaFor(mmoTickEl, 100);
        setTimeout(mmoTicknext, 500);
        return;
    }
    if (mmoTickState == 0) {
        mmoTickFade = mmoTickFade - 1;
        mmoTickAlpha();
        if (mmoTickFade <= 0) {
            mmoTickState = 1;
            setTimeout(mmoTicknext, 0);
            return;
        }
        setTimeout(mmoTicknext, mmo_tickFadeDly);
        return;
    }
    if (mmoTickState == 1) {
        mmoTickItems[mmoTickIdx].className = "";
        mmoTickIdx++;
        if (mmoTickIdx >= mmoTickItems.length) mmoTickIdx = 0;
        mmoTickItems[mmoTickIdx].className = "mmoTickShow";
        setTimeout(mmoTicknext, mmo_tickFadeDly);
        mmoTickState = 2;
        return;
    }
    if (mmoTickState == 2) {
        mmoTickFade = mmoTickFade + 1;
        mmoTickAlpha();
        if (mmoTickFade >= mmo_tickFadeTicks) {
            if (mmoTickItems.length < 2) return;
            mmoTickState = 0;
            setTimeout(mmoTicknext, mmo_tickDly);
            return;
        }
        setTimeout(mmoTicknext, mmo_tickFadeDly);
        return;
    }
}

function mmoTickAlpha() {
    var a = (100 / mmo_tickFadeTicks) * mmoTickFade;
    mmoTickAlphaFor(mmoTickEl, a);
}

function mmoTickAlphaFor(el, a) {
    el.style.filter = 'Alpha(opacity=' + a + ')';
    el.style.opacity = a / 100;
    el.style.MozOpacity = a / 100;
    el.style.KhtmlOpacity = a / 100;
}

var mmoActive_select = null;

function mmoInitSelect() {
    if (!document.getElementById) return false;
    document.getElementById('mmonetbar').style.display = 'block';
    document.getElementById('mmoGame').style.display = 'block';
    document.getElementById('mmoFocus').onkeyup = function(e) {
        mmo_selid = mmoActive_select.id.replace('mmoOptionsDiv', '');
        var e = e || window.event;
        if (e.keyCode) var thecode = e.keyCode;
        else if (e.which) var thecode = e.which;
        mmoSelectMe(mmo_selid, thecode);
    }
}

function mmoSelectMe(selid, thecode) {
    var mmolist = document.getElementById('mmoList' + selid);
    var mmoitems = mmolist.getElementsByTagName('li');
    switch (thecode) {
        case 13:
            mmoShowOptions(selid);
            window.location = mmoActive_select.url;
            break;
        case 38:
            mmoActive_select.activeit.className = '';
            var minus = ((mmoActive_select.activeid - 1) <= 0) ? '0' : (mmoActive_select.activeid - 1);
            mmoActive_select = mmoSetActive(selid, minus);
            break;
        case 40:
            mmoActive_select.activeit.className = '';
            var plus = ((mmoActive_select.activeid + 1) >= mmoitems.length) ? (mmoitems.length - 1) : (mmoActive_select.activeid + 1);
            mmoActive_select = mmoSetActive(selid, plus);
            break;
        default:
            thecode = String.fromCharCode(thecode);
            var found = false;
            for (var i = 0; i < mmoitems.length; i++) {
                var _a = mmoitems[i].getElementsByTagName('a');
                if (navigator.appName.indexOf("Explorer") > -1) {} else {
                    txtContent = _a[0].textContent;
                }
                if (!found && (thecode.toLowerCase() == txtContent.charAt(0).toLowerCase())) {
                    mmoActive_select.activeit.className = '';
                    mmoActive_select = mmoSetActive(selid, i);
                    found = true;
                }
            }
            break;
    }
}

function mmoSetActive(selid, itemid) {
    mmoActive_select = null;
    var mmolist = document.getElementById('mmoList' + selid);
    var mmoitems = mmolist.getElementsByTagName('li');
    mmoActive_select = document.getElementById('mmoOptionsDiv' + selid);;
    mmoActive_select.selid = selid;
    if (itemid != undefined) {
        var _a = mmoitems[itemid].getElementsByTagName('a');
        var textVar = document.getElementById("mmoMySelectText" + selid);
        textVar.innerHTML = _a[0].innerHTML;
        if (selid == 1) textVar.className = _a[0].className;
        mmoitems[itemid].className = 'mmoActive';
    }
    for (var i = 0; i < mmoitems.length; i++) {
        if (mmoitems[i].className == 'mmoActive') {
            mmoActive_select.activeit = mmoitems[i];
            mmoActive_select.activeid = i;
            mmoActive_select.url = (mmoitems[i].getElementsByTagName('a')) ? mmoitems[i].getElementsByTagName('a')[0].href : null;
        }
    }
    return mmoActive_select;
}

function mmoShowOptions(g) {
    var _elem = document.getElementById("mmoOptionsDiv" + g);
    if ((mmoActive_select) && (mmoActive_select != _elem)) {
        mmoActive_select.className = "mmoOptionsDivInvisible";
        document.getElementById('mmonetbar').focus();
    }
    if (_elem.className == "mmoOptionsDivInvisible") {
        document.getElementById('mmoFocus').focus();
        mmoActive_select = mmoSetActive(g);
        if (document.documentElement) {
            document.documentElement.onclick = mmoHideOptions;
        } else {
            window.onclick = mmoHideOptions;
        }
        _elem.className = "mmoOptionsDivVisible";
    } else if (_elem.className == "mmoOptionsDivVisible") {
        _elem.className = "mmoOptionsDivInvisible";
        document.getElementById('mmonetbar').focus();
    }
}

function mmoHideOptions(e) {
    if (mmoActive_select) {
        if (!e) e = window.event;
        var _target = (e.target || e.srcElement);
        if ((_target.id.indexOf('mmoOptionsDiv') != -1)) return false;
        if (mmoisElementBefore(_target, 'mmoSelectArea') == 0 && (mmoisElementBefore(_target, 'mmoOptionsDiv') == 0)) {
            mmoActive_select.className = "mmoOptionsDivInvisible";
            mmoActive_select = null;
        }
    } else {
        if (document.documentElement) document.documentElement.onclick = function() {};
        else window.onclick = null;
    }
}

function mmoisElementBefore(_el, _class) {
    var _parent = _el;
    do _parent = _parent.parentNode; while (_parent && (_parent.className != null) && (_parent.className.indexOf(_class) == -1))
    return (_parent.className && (_parent.className.indexOf(_class) != -1)) ? 1 : 0;
}

var ua = navigator.userAgent.toLowerCase();
var ie6browser = ((ua.indexOf("msie 6") > -1) && (ua.indexOf("opera") < 0)) ? true : false;

function highlight(el, mod) {
    if (ie6browser) {
        if (mod == 1 && !el.className.match(/highlight/)) el.className = el.className + ' highlight';
        else if (mod == 0) el.className = el.className.replace(/highlight/g, '');
    }
}

var mmoToggleDisplay = {
    init: function(wrapper) {
        var wrapper = document.getElementById(wrapper);
        if (!wrapper) return;
        var headline = wrapper.getElementsByTagName("h4")[0],
            link = headline.getElementsByTagName("a")[0];
        if (link.className.indexOf("gameCountZero") != -1) return false;
        var panel = document.getElementById(link.hash.substr(1));
        mmoToggleDisplay.hidePanel(panel, link);
        link.onclick = function(e) {
            mmoToggleDisplay.loadImages();
            mmoToggleDisplay.toggle(this, panel);
            return false;
        };
        mmoToggleDisplay.outerClick(wrapper, link, panel);
        var timeoutID = null,
            delay = 8000;
        wrapper.onmouseout = function(e) {
            if (!e) {
                var e = window.event;
            }
            var reltg = (e.relatedTarget) ? e.relatedTarget : e.toElement;
            if (reltg == wrapper || mmoToggleDisplay.isChildOf(reltg, wrapper)) {
                return;
            }
            timeoutID = setTimeout(function() {
                mmoToggleDisplay.hidePanel(panel, link);
            }, delay);
        };
        wrapper.onmouseover = function(e) {
            if (timeoutID) {
                clearTimeout(timeoutID);
            }
        };
    },
    isChildOf: function(child, parent) {
        while (child && child != parent) {
            child = child.parentNode;
        }
        if (child == parent) {
            return true;
        } else {
            return false;
        }
    },
    hidePanel: function(panel, link) {
        panel.style.display = "none";
        link.className = "toggleHidden";
    },
    toggle: function(link, panel) {
        panel.style.display = panel.style.display == "none" ? "block" : "none";
        link.className = link.className == "toggleHidden" ? "" : "toggleHidden";
    },
    outerClick: function(wrapper, link, panel) {
        document.body.onclick = function(e) {
            if (!e) {
                e = window.event
            };
            if (!(mmoToggleDisplay.isChildOf((e.target || e.srcElement), wrapper)) && panel.style.display != "none") {
                mmoToggleDisplay.toggle(link, panel);
            }
        }
    },
    loadImages: function() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        var jsonGameData_browser = '{"goblinkeeper":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf2.geo.gfsrv.net\/cdnab\/cb244b7c4c2e3b5a5b29c425cf4c34.png"}',
            jsonGameData_client = '{"wizard101":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf1.geo.gfsrv.net\/cdnfe\/145389879c3de525f215d58a2164ec.png","4story":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf2.geo.gfsrv.net\/cdn48\/f45f7af83937fdcd603f8832c9af7e.png","nostale":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf1.geo.gfsrv.net\/cdnf2\/5e6a67dad4ce5709555ec4b9d6c460.png","airrivals":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf2.geo.gfsrv.net\/cdnd4\/02ac9b8a1b4b30a1c0652111e8ead7.png","aion":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf1.geo.gfsrv.net\/cdn36\/19670436cde4ed9579ad5c75bfe430.png","runesofmagic":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf3.geo.gfsrv.net\/cdne0\/c0ea241e7c3638305000233c263593.png","raiderz":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf2.geo.gfsrv.net\/cdn7f\/d4ee9d948d95a3475346617f3a12ed.png"}',
            jsonGameData_featured = '{"tera":"http:\/\/web.archive.org\/web\/20130708185211\/http:\/\/gf1.geo.gfsrv.net\/cdnf9\/9859166bf0117be2311fcb09086006.png"}';
        script.text = '';
        script.text += ' mmoToggleDisplay.callback(' + jsonGameData_featured + ', "featured");';
        script.text += ' mmoToggleDisplay.callback(' + jsonGameData_client + ', "client");';
        script.text += 'mmoToggleDisplay.callback(' + jsonGameData_browser + ', "browser");';
        document.getElementsByTagName("head")[0].appendChild(script);
        mmoToggleDisplay.loadImages = function() {};
    },
    callback: function(data, gamesCat) {
        for (var gameName in data) {
            var gameSpan = document.getElementById("gameImgTarget_" + gameName);
            if (!gameSpan) {
                return false;
            }
            var gameImg = document.createElement("img");
            gameImg.src = "" + data[gameName];
            gameImg.alt = "";
            gameSpan.appendChild(gameImg);
        }
    }
}
