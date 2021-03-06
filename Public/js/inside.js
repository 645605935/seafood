if (!window.console) {
    var names = ["log", "debug", "info", "warn", "error", "assert", "dir", "dirxml", "group", "groupEnd", "time", "timeEnd", "count", "trace", "profile", "profileEnd"];
    window.console = {};
    for (var i = 0; i < names.length; ++i) window.console[names[i]] = function () { }
};
var G = {
    ui: {},
    logic: {},
    util: {},
    data: {},
    domain: {
        w: config['domain'],//localhost
        t: 'http://'+config['domain']+config['public'],//http://localhost/Public,
        k: 'http://'+config['domain']+config['public']+'/Vip'//http://localhost/wm-xin-a
    },
    set: {
        KindEditor_seting: {
            themeType: "simple",
            resizeType: 1,
            syncType: "",
            allowPreviewEmoticons: false,
            items: ['source', 'undo', 'redo', 'plainpaste', 'plainpaste', 'wordpaste', 'clearhtml', 'quickformat', 'selectall', 'fullscreen', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline', 'hr', 'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist', 'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'unlink', 'preview'],
            allowFileManager: true,
            height: "300px",
            width: 700,
            minWidth: 610,
            afterCreate: function () {
                this.sync()
            },
            afterBlur: function () {
                this.sync()
            }
        },
        dataTables: {
            bProcessing: true,
            bServerSide: true,
            sPaginationType: "full_numbers",
            sAjaxSource: "/plus/page/server.php",
            "oLanguage": {
                "sLengthMenu": " <span>每页显示</span>_MENU_ <span>条记录</span> ",
                "sZeroRecords": "对不起，查询不到任何相关数据",
                "sInfo": "当前显示 _START_ 到 _END_ 条，共 _TOTAL_ 条记录",
                "sInfoEmtpy": "找不到相关数据",
                "sInfoFiltered": "数据表中共为 _MAX_ 条记录)",
                "sProcessing": "正在加载中...",
                "sSearch": "<span>搜索:</span> ",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "第一页",
                    "sPrevious": " 上一页 ",
                    "sNext": " 下一页 ",
                    "sLast": " 最后一页 "
                }
            }
        }
    }
};
(function (n) {
    var f = {
        buttons: {
            button1: {
                text: "OK",
                danger: !1,
                onclick: function () {
                    n.fallr("hide")
                }
            }
        },
        icon: "check",
        content: "Hello",
        position: "top",
        closeKey: !0,
        closeOverlay: !1,
        useOverlay: !0,
        autoclose: !1,
        easingDuration: 300,
        easingIn: "swing",
        easingOut: "swing",
        height: "auto",
        width: "360px",
        zIndex: 100,
        bound: window,
        afterHide: function () { },
        afterShow: function () { }
    },
		t, e, i = n(window),
		u = {
		    hide: function (f, o, s) {
		        if (u.isActive()) {
		            n("#fallr-wrapper").stop(!0, !0);
		            var h = n("#fallr-wrapper"),
						a = h.css("position"),
						c = a === "fixed",
						l = 0;
		            switch (t.position) {
		                case "bottom":
		                case "center":
		                    l = (c ? i.height() : h.offset().top + h.outerHeight()) + 10;
		                    break;
		                default:
		                    l = (c ? -1 * h.outerHeight() : h.offset().top - h.outerHeight()) - 10
		            }
		            h.animate({
		                top: l,
		                opacity: c ? 1 : 0
		            }, t.easingDuration || t.duration, t.easingOut, function () {
		                n.browser.msie ? n("#fallr-overlay").css("display", "none") : n("#fallr-overlay").fadeOut("fast"), h.remove(), clearTimeout(e), o = typeof o == "function" ? o : t.afterHide, o.call(s)
		            }), n(document).unbind("keydown", r.enterKeyHandler).unbind("keydown", r.closeKeyHandler).unbind("keydown", r.tabKeyHandler)
		        }
		    },
		    resize: function (t, i, f) {
		        var e = n("#fallr-wrapper"),
					o = parseInt(t.width, 10),
					s = parseInt(t.height, 10),
					h = Math.abs(e.outerWidth() - o),
					c = Math.abs(e.outerHeight() - s);
		        u.isActive() && (h > 5 || c > 5) && (e.animate({
		            width: o
		        }, function () {
		            n(this).animate({
		                height: s
		            }, function () {
		                r.fixPos()
		            })
		        }), n("#fallr").animate({
		            width: o - 94
		        }, function () {
		            n(this).animate({
		                height: s - 116
		            }, function () {
		                typeof i == "function" && i.call(f)
		            })
		        }))
		    },
		    show: function (o, s, h) {
		        var a;
		        if (u.isActive()) n("body", "html").animate({
		            scrollTop: n("#fallr").offset().top
		        }, function () {
		            n.fallr("shake")
		        }), n.error("Can't create new message with content: \"" + o.content + '", past message with content "' + t.content + '" is still active');
		        else {
		            t = n.extend({}, f, o), n('<div id="fallr-wrapper"><\/div>').appendTo("body"), t.bound = n(t.bound).length > 0 ? t.bound : window;
		            var c = n("#fallr-wrapper"),
						v = n("#fallr-overlay"),
						l = t.bound === window;
		            c.css({
		                width: t.width,
		                height: t.height,
		                position: "absolute",
		                top: "-9999px",
		                left: "-9999px"
		            }).html('<div id="fallr-icon"><\/div><div id="fallr"><\/div><div id="fallr-buttons"><\/div>').find("#fallr-icon").addClass("icon-msg-" + t.icon).end().find("#fallr").html(t.content).css({
		                height: t.height == "auto" ? "auto" : c.height() - 116,
		                width: c.width() - 94
		            }).end().find("#fallr-buttons").html(function () {
		                var i = "",
							n;
		                for (n in t.buttons) t.buttons.hasOwnProperty(n) && (i = i + '<a href="#" class="fallr-button ' + (t.buttons[n].danger ? "fallr-button-danger" : "") + '" id="fallr-button-' + n + '">' + t.buttons[n].text + "<\/a>");
		                return i
		            }()).find(".fallr-button").bind("click", function () {
		                var i = n(this).attr("id").substring(13),
							r;
		                return typeof t.buttons[i].onclick == "function" && t.buttons[i].onclick != !1 ? (r = n("#fallr"), t.buttons[i].onclick.apply(r)) : u.hide(), !1
		            }), a = function () {
		                c.show();
		                var y = l ? (i.width() - c.outerWidth()) / 2 + i.scrollLeft() : (n(t.bound).width() - c.outerWidth()) / 2 + n(t.bound).offset().left,
							r, f, a = i.height() > c.height() && i.width() > c.width() && l ? "fixed" : "absolute",
							o = a === "fixed";
		                switch (t.position) {
		                    case "bottom":
		                        r = l ? o ? i.height() : i.scrollTop() + i.height() : n(t.bound).offset().top + n(t.bound).outerHeight(), f = r - c.outerHeight();
		                        break;
		                    case "center":
		                        r = l ? o ? -1 * c.outerHeight() : v.offset().top - c.outerHeight() : n(t.bound).offset().top + n(t.bound).height() / 2 - c.outerHeight(), f = r + c.outerHeight() + ((l ? i.height() : c.outerHeight() / 2) - c.outerHeight()) / 2;
		                        break;
		                    default:
		                        f = l ? o ? 0 : i.scrollTop() : n(t.bound).offset().top, r = f - c.outerHeight()
		                }
		                c.css({
		                    left: y,
		                    position: a,
		                    top: r,
		                    "z-index": 999999
		                }).animate({
		                    top: f
		                }, t.easingDuration, t.easingIn, function () {
		                    s = typeof s == "function" ? s : t.afterShow, s.call(h), t.autoclose && (e = setTimeout(u.hide, t.autoclose))
		                })
		            }, t.useOverlay ? n.browser.msie && n.browser.version < 9 ? (v.css({
		                display: "block",
		                "z-index": t.zIndex
		            }), a()) : v.css({
		                "z-index": t.zIndex
		            }).fadeIn(a) : a(), n(document).bind("keydown", r.enterKeyHandler).bind("keydown", r.closeKeyHandler).bind("keydown", r.tabKeyHandler), n("#fallr-buttons").children().eq(-1).bind("focus", function () {
		                n(this).bind("keydown", r.tabKeyHandler)
		            }), c.find(":input").bind("keydown", function (t) {
		                r.unbindKeyHandler(), t.keyCode === 13 && n(".fallr-button").eq(0).trigger("click")
		            })
		        }
		    },
		    set: function (n, i, r) {
		        for (var u in n) f.hasOwnProperty(u) && (f[u] = n[u], t && t[u] && (t[u] = n[u]));
		        typeof i == "function" && i.call(r)
		    },
		    isActive: function () {
		        return !!(n("#fallr-wrapper").length > 0)
		    },
		    blink: function () {
		        n("#fallr-wrapper").fadeOut(100, function () {
		            n(this).fadeIn(100)
		        })
		    },
		    shake: function () {
		        n("#fallr-wrapper").stop(!0, !0).animate({
		            left: "+=20px"
		        }, 50, function () {
		            n(this).animate({
		                left: "-=40px"
		            }, 50, function () {
		                n(this).animate({
		                    left: "+=30px"
		                }, 50, function () {
		                    n(this).animate({
		                        left: "-=20px"
		                    }, 50, function () {
		                        n(this).animate({
		                            left: "+=10px"
		                        }, 50)
		                    })
		                })
		            })
		        })
		    }
		},
		r = {
		    fixPos: function () {
		        var r = n("#fallr-wrapper"),
					e = r.css("position"),
					f, u;
		        if (i.width() > r.outerWidth() && i.height() > r.outerHeight()) {
		            f = (i.width() - r.outerWidth()) / 2, u = i.height() - r.outerHeight();
		            switch (t.position) {
		                case "center":
		                    u = u / 2;
		                    break;
		                case "bottom":
		                    break;
		                default:
		                    u = 0
		            }
		            e == "fixed" ? r.animate({
		                left: f
		            }, function () {
		                n(this).animate({
		                    top: u
		                })
		            }) : r.css({
		                position: "fixed",
		                left: f,
		                top: u
		            })
		        } else f = (i.width() - r.outerWidth()) / 2 + i.scrollLeft(), u = i.scrollTop(), e != "fixed" ? r.animate({
		            left: f
		        }, function () {
		            n(this).animate({
		                top: u
		            })
		        }) : r.css({
		            position: "absolute",
		            top: u,
		            left: f > 0 ? f : 0
		        })
		    },
		    enterKeyHandler: function (t) {
		        t.keyCode === 13 && (n("#fallr-buttons").children().eq(0).focus(), r.unbindKeyHandler())
		    },
		    tabKeyHandler: function (t) {
		        t.keyCode === 9 && (n("#fallr-wrapper").find(":input, .fallr-button").eq(0).focus(), r.unbindKeyHandler(), t.preventDefault())
		    },
		    closeKeyHandler: function (n) {
		        n.keyCode === 27 && t.closeKey && u.hide()
		    },
		    unbindKeyHandler: function () {
		        n(document).unbind("keydown", r.enterKeyHandler).unbind("keydown", r.tabKeyHandler)
		    }
		};
    n(document).ready(function () {
        n("body").append('<div id="fallr-overlay"><\/div>'), n("#fallr-overlay").bind("click", function () {
            t.closeOverlay ? u.hide() : u.blink()
        })
    }), n(window).resize(function () {
        u.isActive() && t.bound === window && r.fixPos()
    }), n.fallr = function (t, i, r) {
        var f = window;
        typeof t == "object" && (i = t, t = "show"), u[t] ? (typeof i == "function" && (r = i, i = null), u[t](i, r, f)) : n.error('Method "' + t + '" does not exist in $.fallr')
    }
})(jQuery);
jQuery.fn.extend({
    autoscroll: function () {
        var _self = $(this);
        $('html,body').animate({
            scrollTop: _self.offset().top
        }, 800)
    }
});
(function (a, b) {
    "use strict";
    var c = "undefined" != typeof Element && "ALLOW_KEYBOARD_INPUT" in Element,
		d = function () {
		    for (var a, c, d = [
				["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"],
				["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"],
				["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"],
				["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"]
		    ], e = 0, f = d.length, g = {}; f > e; e++) if (a = d[e], a && a[1] in b) {
		        for (e = 0, c = a.length; c > e; e++) g[d[0][e]] = a[e];
		        return g
		    }
		    return !1
		}(),
		e = {
		    request: function (a) {
		        var e = d.requestFullscreen;
		        a = a || b.documentElement, /5\.1[\.\d]*Safari/.test(navigator.userAgent) ? a[e]() : a[e](c && Element.ALLOW_KEYBOARD_INPUT)
		    },
		    exit: function () {
		        b[d.exitFullscreen]()
		    },
		    toggle: function (a) {
		        this.isFullscreen ? this.exit() : this.request(a)
		    },
		    onchange: function () { },
		    onerror: function () { },
		    raw: d
		};
    return d ? (Object.defineProperties(e, {
        isFullscreen: {
            get: function () {
                return !!b[d.fullscreenElement]
            }
        },
        element: {
            enumerable: !0,
            get: function () {
                return b[d.fullscreenElement]
            }
        },
        enabled: {
            enumerable: !0,
            get: function () {
                return !!b[d.fullscreenEnabled]
            }
        }
    }), b.addEventListener(d.fullscreenchange, function (a) {
        e.onchange.call(e, a)
    }), b.addEventListener(d.fullscreenerror, function (a) {
        e.onerror.call(e, a)
    }), a.screenfull = e, void 0) : a.screenfull = !1
});
if (!String.prototype.format) {
    String.prototype.format = function () {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function (match, number) {
            return typeof args[number] != 'undefined' ? args[number] : match
        })
    }
};
if (!Date.prototype.format) {
    Date.prototype.format = function (format) {
        var o = {
            "M+": this.getMonth() + 1,
            "d+": this.getDate(),
            "h+": this.getHours(),
            "m+": this.getMinutes(),
            "s+": this.getSeconds(),
            "q+": Math.floor((this.getMonth() + 3) / 3),
            "S": this.getMilliseconds()
        };
        if (/(y+)/.test(format)) format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for (var k in o) if (new RegExp("(" + k + ")").test(format)) format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length));
        return format
    }
};
G.string = {
    Empty: ""
};
G.ui.tips = {
    err: function (t, u) {
        this._set(t, u, {
            useOverlay: true,
            position: "center",
            icon: "error",
            autoclose: null,
            closeOverlay: true,
            buttons: {
                button1: {
                    text: '确定',
                    danger: false,
                    onclick: function () {
                        $.fallr('hide')
                    }
                }
            }
        }), afterHide = function () {
            if (u) {
                window.location = u
            }
        }
    },
    info: function (t, u) {
        this._set(t, u, {
            useOverlay: true,
            position: "center",
            icon: "info",
            autoclose: null,
            closeOverlay: true,
            buttons: u ? {
                button1: {
                    text: '确定',
                    onclick: function () {
                        window.location = u
                    }
                }
            } : {
                button1: {
                    text: '确定',
                    danger: false,
                    onclick: function () {
                        $.fallr('hide')
                    }
                }
            }
        })
    },
    suc: function (t, u) {
        this._set(t, u, {
            useOverlay: true,
            position: null,
            autoclose: 1000,
            icon: "check",
            closeOverlay: true,
            buttons: null
        })
    },
    _set: function (str, url, opt) {
        opt = $.extend({
            useOverlay: true,
            position: null,
            icon: null,
            autoclose: null,
            closeOverlay: true,
            buttons: {},
            afterHide: function () { }
        }, opt || {});
        if (url) {
            opt.afterHide = function () {
                window.location = url
            }
        } else {
            opt.afterHide = function () { }
        }
        $.fallr('show', {
            content: str,
            autoclose: opt.autoclose,
            useOverlay: opt.useOverlay,
            position: opt.position,
            icon: opt.icon,
            closeOverlay: opt.closeOverlay,
            buttons: opt.buttons,
            afterHide: opt.afterHide
        })
    },
    confirm: function (t, u) {
        $.fallr('show', {
            buttons: {
                button1: {
                    text: '确定',
                    danger: true,
                    onclick: function () {
                        window.location = u
                    }
                },
                button2: {
                    text: '取消'
                }
            },
            content: '<p>' + t + '</p>',
            icon: 'trash'
        })
    },
    confirm_flag: function (t, f) {
        $.fallr('show', {
            buttons: {
                button1: {
                    text: '确定',
                    danger: true,
                    onclick: f
                },
                button2: {
                    text: '取消'
                }
            },
            content: '<p>' + t + '</p>',
            icon: 'trash'
        })
    },
    confirm_tips: function (u, t) {
        $.fallr('show', {
            position: 'center',
            buttons: {
                button1: {
                    text: '验证',
                    danger: true,
                    onclick: function () {
                        window.location = u
                    }
                },
                button2: {
                    text: '继续使用'
                }
            },
            content: t,
            icon: 'info'
        })
    },
    iframe: function (t, u, w, h) {
        if (w) w = 500;
        if (h) h = 300;
        $.fallr('show', {
            content: '<h2>' + t + '</h2>' + '<iframe width="' + w + '" height="' + h + '" src="' + u + '" frameborder="0" allowfullscreen></iframe>',
            width: w + 130,
            icon: null,
            closeOverlay: true,
            position: 'center',
            buttons: {
                button1: {
                    text: '关闭'
                }
            }
        })
    },
    html: function (t, u) {
        var b = {};
        if (u) {
            b = {
                button1: {
                    text: '确定',
                    onclick: function () {
                        $.fallr('hide')
                    }
                }
            }
        }
        $.fallr('show', {
            content: '' + t + '',
            position: 'center',
            buttons: b,
            width: 500,
            afterHide: function () {
                if (u) {
                    window.location = u
                }
            }
        })
    },
    up: function (t, v, u) {
        var c = $.cookie("up_tips");
        if (!c || c != v) {
            var b = {
                button1: {
                    text: '关闭',
                    onclick: function () {
                        $.cookie("up_tips", v, {
                            expires: 365,
                            path: "/"
                        });
                        $.fallr('hide')
                    }
                },
                button2: {
                    text: '查看详情',
                    onclick: function () {
                        $.cookie("up_tips", v, {
                            expires: 365,
                            path: "/"
                        });
                        window.location = u;
                        $.fallr('hide')
                    }
                }
            };
            $.fallr('show', {
                content: '' + t + '',
                position: 'center',
                buttons: b,
                icon: 'up',
                width: '400px',
                height: '230px'
            })
        }
    },
    confirm_t: function (t, u) {
        $.fallr('show', {
            buttons: {
                button1: {
                    text: '确定',
                    danger: true,
                    onclick: function () {
                        window.location = u
                    }
                },
                button2: {
                    text: '取消'
                }
            },
            content: '<p>' + t + '</p>'
        })
    }
};
G.logic.form = {
    tip: function (data) {
    	console.log(data);
        if (data.status == 1) {
            if (data.html) {
                G.ui.tips.html(data.html, data.url)
            } else {
                G.ui.tips.suc(data.info, data.url)
            }
        } else {
            G.ui.tips.err(data.info, data.url)//出现一次
        }
    },
    validate: function () {
        var $from = $("form.form-validate");
        var is_modal = $from.hasClass("form-modal");
        var modal = null;
        if (is_modal) {
            modal = $from.parents(".modal");
            modal.on('hidden', function () {
                $from.find("div.control-group").removeClass("error success");
                $from.find("span.error").removeClass("error").text("")
            })
        };
        if ($from.length > 0) {
            $from.each(function () {
                $(this).validate({
                    errorElement: "span",
                    errorClass: "help-block error",
                    errorPlacement: function (e, t) {
                        var p = t.parents(".controls");
                        if (p.length > 0) {
                            p.append(e)
                        } else {
                            t.addClass("error")
                        }
                    },
                    highlight: function (e) {
                        $(e).closest(".control-group").removeClass("error success").addClass("error")
                    },
                    success: function (e) {
                        e.addClass("valid").closest(".control-group").removeClass("error success")
                    },
                    submitHandler: function (form) {
                        var _sb = true;
                        if (typeof KindEditor !== "undefined" && KindEditor.instances) {
                            $.each(KindEditor.instances, function () {
                                this.sync();
                                var $element = $(this.srcElement[0]);
                                var r = $element.attr("data-rule-required"),
									m = $element.attr("data-msg-required"),
									e = $element.attr("data-rule-rangelength"),
									em = $element.attr("data-msg-rangelength");
                                var v = $.trim($element.val()).replace(/(&nbsp;)|\s|\u00a0/g, '');
                                if (r) {
                                    if (v.length == 0) {
                                        var msg = m;
                                        G.ui.tips.info(msg ? msg : "内容不能为空");
                                        _sb = false;
                                        return false
                                    }
                                };
                                if (e) {
                                    e = eval(e);
                                    var min = e[0];
                                    var max = e[1];
                                    var vv = $element.val();
                                    if (vv.length <= min || vv.length >= max) {
                                        G.ui.tips.info(em ? em : "内容不能小于{0}且大于{1}".format(min, max));
                                        _sb = false;
                                        return false
                                    }
                                }
                            })
                        }
                        if (_sb) {
                            var btn = $("button[type='submit']", form);
                            btn.button('loading');
                            $(form).ajaxSubmit({
                                dataType: 'json',
                                success: function (d) {
                                    btn.button('reset');
                                    if (modal) modal.modal('hide');
                                    G.logic.form.tip(d)
                                },
                                error: function (d) {
                                    btn.button('reset');
                                    if (modal) modal.modal('hide');
                                    G.ui.tips.info(d.responseText)
                                }
                            })
                        }
                    }
                })
            })
        }
    },
    ajax_modal: function () {
        var $from = $("form.form-modal");
        var btn = $("button[type='submit']", $from);
        var is_validate = $from.hasClass("form-validate");
        if ($from.length > 0 && btn.length > 0 && !is_validate) {
            btn.click(function () {
                $from.ajaxSubmit({
                    dataType: 'json',
                    success: function (d) {
                    	console.log(d);
                        btn.button('reset');
                        btn.parents(".modal").modal('hide');
                        G.logic.form.tip(d)
                    },
                    error: function (d) {
                    	console.log(d);
                        btn.button('reset');
                        btn.parents(".modal").modal('hide');
                        G.ui.tips.info(d.responseText)
                    }
                });
                return false
            })
        }
    },
    wizard: function () {
        $(".form-wizard").length > 0 && $(".form-wizard").formwizard({
            validationEnabled: true,
            formPluginEnabled: !0,
            focusFirstInput: !0,
            disableUIStyles: false,
            validationOptions: {
                errorElement: "span",
                errorClass: "help-block error",
                errorPlacement: function (e, t) {
                    t.parents(".controls").append(e)
                },
                highlight: function (e) {
                    $(e).closest(".control-group").removeClass("error success").addClass("error")
                },
                success: function (e) {
                    e.addClass("valid").closest(".control-group").removeClass("error success")
                }
            },
            formOptions: {
                dataType: 'json',
                success: function (d) {
                    G.logic.form.tip(d)
                },
                beforeSubmit: function (d) {
                    var f = true;
                    if (typeof KindEditor !== "undefined" && KindEditor.instances) {
                        $.each(KindEditor.instances, function () {
                            this.sync();
                            var $element = $(this.srcElement[0]);
                            var r = $element.attr("data-rule-required"),
								m = $element.attr("data-msg-required"),
								e = $element.attr("data-rule-range"),
								em = $element.attr("data-msg-range");
                            var v = $.trim($element.val()).replace(/(&nbsp;)|\s|\u00a0/g, '');
                            if (r) {
                                if (v.length == 0) {
                                    G.ui.tips.info(m ? m : "内容不能为空");
                                    f = false;
                                    return false
                                }
                            }
                            if (e) {
                                e = eval(e);
                                var min = e[0];
                                var max = e[1];
                                var vv = $element.val();
                                if (vv.length <= min || vv.length >= max) {
                                    G.ui.tips.info(em ? em : "内容不能小于{0}且大于{1}".format(min, max));
                                    f = false;
                                    return false
                                }
                            }
                        })
                    }
                    if (typeof is_test_image !== "undefined" && f) {
                        if (!$("li.imgbox").length) {
                            G.ui.tips.info(is_test_image);
                            return false
                        }
                    }
                },
                error: function (d) {
                    G.ui.tips.info(d.responseText)
                }
            }
        })
    },
    init: function () {
        this.validate();
        this.wizard();
        this.ajax_modal()
    }
};


$(function () {
    G.logic.form.init()
});