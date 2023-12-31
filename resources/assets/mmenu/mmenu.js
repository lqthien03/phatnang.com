! function(n) {
    var i = {};

    function s(e) {
        if (i[e])
            return i[e].exports;
        var t = i[e] = {
            i: e,
            l: !1,
            exports: {}
        };
        return n[e].call(t.exports, t, t.exports, s),
            t.l = !0,
            t.exports
    }
    s.m = n,
        s.c = i,
        s.d = function(e, t, n) {
            s.o(e, t) || Object.defineProperty(e, t, {
                enumerable: !0,
                get: n
            })
        },
        s.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }),
                Object.defineProperty(e, "__esModule", {
                    value: !0
                })
        },
        s.t = function(t, e) {
            if (1 & e && (t = s(t)),
                8 & e)
                return t;
            if (4 & e && "object" == typeof t && t && t.__esModule)
                return t;
            var n = Object.create(null);
            if (s.r(n),
                Object.defineProperty(n, "default", {
                    enumerable: !0,
                    value: t
                }),
                2 & e && "string" != typeof t)
                for (var i in t)
                    s.d(n, i, function(e) {
                            return t[e]
                        }
                        .bind(null, i));
            return n
        },
        s.n = function(e) {
            var t = e && e.__esModule ? function() {
                    return e.default
                } :
                function() {
                    return e
                };
            return s.d(t, "a", t),
                t
        },
        s.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        },
        s.p = "",
        s(s.s = 0)
}([function(e, t, n) {
    "use strict";
    n.r(t);
    var i = {
            hooks: {},
            extensions: [],
            wrappers: [],
            navbar: {
                add: !0,
                sticky: !0,
                title: "Menu",
                titleLink: "parent"
            },
            onClick: {
                close: null,
                preventDefault: null,
                setSelected: !0
            },
            slidingSubmenus: !0
        },
        s = {
            classNames: {
                inset: "Inset",
                nolistview: "NoListview",
                nopanel: "NoPanel",
                panel: "Panel",
                selected: "Selected",
                vertical: "Vertical"
            },
            language: null,
            openingInterval: 25,
            panelNodetype: ["ul", "ol", "div"],
            transitionDuration: 400
        };

    function l(e, t) {
        for (var n in "object" != m(e) && (e = {}),
                "object" != m(t) && (t = {}),
                t)
            t.hasOwnProperty(n) && (void 0 === e[n] ? e[n] = t[n] : "object" == m(e[n]) && l(e[n], t[n]));
        return e
    }

    function m(e) {
        return {}.toString.call(e).match(/\s([a-zA-Z]+)/)[1].toLowerCase()
    }

    function r(e, t, n) {
        if ("function" == typeof t) {
            var i = t.call(e);
            if (void 0 !== i)
                return i
        }
        return null !== t && "function" != typeof t && void 0 !== t || void 0 === n ? t : n
    }

    function c(t, n, e) {
        var i = !1,
            s = function(e) {
                void 0 !== e && e.target !== t || (i || (t.removeEventListener("transitionend", s),
                        t.removeEventListener("webkitTransitionEnd", s),
                        n.call(t)),
                    i = !0)
            };
        t.addEventListener("transitionend", s),
            t.addEventListener("webkitTransitionEnd", s),
            setTimeout(s, 1.1 * e)
    }

    function d() {
        return "mm-" + a++
    }
    var a = 0;

    function o(e) {
        return "mm-" == e.slice(0, 3) ? e.slice(3) : e
    }
    var f = {};

    function p(e, t) {
        void 0 === f[t] && (f[t] = {}),
            l(f[t], e)
    }

    function h(e) {
        var t = e.split("."),
            n = document.createElement(t.shift());
        return t.forEach(function(e) {
                n.classList.add(e)
            }),
            n
    }

    function v(e, t) {
        return Array.prototype.slice.call(e.querySelectorAll(t))
    }

    function b(e, t) {
        var n = Array.prototype.slice.call(e.children);
        return t ? n.filter(function(e) {
            return e.matches(t)
        }) : n
    }

    function u(e, t) {
        for (var n = [], i = e.parentElement; i;)
            n.push(i),
            i = i.parentElement;
        return t ? n.filter(function(e) {
            return e.matches(t)
        }) : n
    }

    function g(e) {
        return e.filter(function(e) {
            return !e.matches(".mm-hidden")
        })
    }

    function _(e) {
        var t = [];
        return g(e).forEach(function(e) {
                t.push.apply(t, b(e, "a.mm-listitem__text"))
            }),
            t.filter(function(e) {
                return !e.matches(".mm-btn_next")
            })
    }

    function y(e, t, n) {
        e.matches("." + t) && (e.classList.remove(t),
            e.classList.add(n))
    }
    var L = {};

    function E(e, t, n) {
        "number" == typeof e && (e = "(min-width: " + e + "px)"),
            L[e] = L[e] || [],
            L[e].push({
                yes: t,
                no: n
            })
    }

    function w(e, t) {
        for (var n = t.matches ? "yes" : "no", i = 0; i < L[e].length; i++)
            L[e][i][n]()
    }
    p({
            Menu: "Menu"
        }, "nl"),
        p({
            Menu: "منو"
        }, "fa"),
        p({
            Menu: "Menü"
        }, "de"),
        p({
            Menu: "Меню"
        }, "ru");
    var x = (P.prototype.openPanel = function(t, e) {
            var n = this;
            if (this.trigger("openPanel:before", [t]),
                t && (t.matches(".mm-panel") || (t = t.closest(".mm-panel")),
                    t)) {
                if ("boolean" != typeof e && (e = !0),
                    t.parentElement.matches(".mm-listitem_vertical")) {
                    u(t, ".mm-listitem_vertical").forEach(function(e) {
                        e.classList.add("mm-listitem_opened"),
                            b(e, ".mm-panel").forEach(function(e) {
                                e.classList.remove("mm-hidden")
                            })
                    });
                    var i = u(t, ".mm-panel").filter(function(e) {
                        return !e.parentElement.matches(".mm-listitem_vertical")
                    });
                    this.trigger("openPanel:start", [t]),
                        i.length && this.openPanel(i[0]),
                        this.trigger("openPanel:finish", [t])
                } else {
                    if (t.matches(".mm-panel_opened"))
                        return;
                    var s = b(this.node.pnls, ".mm-panel"),
                        a = b(this.node.pnls, ".mm-panel_opened")[0];
                    s.filter(function(e) {
                        return e !== t
                    }).forEach(function(e) {
                        e.classList.remove("mm-panel_opened-parent")
                    });
                    for (var o = t.mmParent; o;)
                        (o = o.closest(".mm-panel")) && (o.parentElement.matches(".mm-listitem_vertical") || o.classList.add("mm-panel_opened-parent"),
                            o = o.mmParent);
                    s.forEach(function(e) {
                            e.classList.remove("mm-panel_highest")
                        }),
                        s.filter(function(e) {
                            return e !== a
                        }).filter(function(e) {
                            return e !== t
                        }).forEach(function(e) {
                            e.classList.add("mm-hidden")
                        }),
                        t.classList.remove("mm-hidden");
                    var r = function() {
                            a && a.classList.remove("mm-panel_opened"),
                                t.classList.add("mm-panel_opened"),
                                t.matches(".mm-panel_opened-parent") ? (a && a.classList.add("mm-panel_highest"),
                                    t.classList.remove("mm-panel_opened-parent")) : (a && a.classList.add("mm-panel_opened-parent"),
                                    t.classList.add("mm-panel_highest")),
                                n.trigger("openPanel:start", [t])
                        },
                        m = function() {
                            a && (a.classList.remove("mm-panel_highest"),
                                    a.classList.add("mm-hidden")),
                                t.classList.remove("mm-panel_highest"),
                                n.trigger("openPanel:finish", [t])
                        };
                    e && !t.matches(".mm-panel_noanimation") ? setTimeout(function() {
                        c(t, function() {
                                m()
                            }, n.conf.transitionDuration),
                            r()
                    }, this.conf.openingInterval) : (r(),
                        m())
                }
                this.trigger("openPanel:after", [t])
            }
        },
        P.prototype.closePanel = function(e) {
            this.trigger("closePanel:before", [e]);
            var t = e.parentElement;
            t.matches(".mm-listitem_vertical") && (t.classList.remove("mm-listitem_opened"),
                    e.classList.add("mm-hidden"),
                    this.trigger("closePanel", [e])),
                this.trigger("closePanel:after", [e])
        },
        P.prototype.closeAllPanels = function(e) {
            this.trigger("closeAllPanels:before"),
                this.node.pnls.querySelectorAll(".mm-listitem").forEach(function(e) {
                    e.classList.remove("mm-listitem_selected"),
                        e.classList.remove("mm-listitem_opened")
                });
            var t = b(this.node.pnls, ".mm-panel"),
                n = e || t[0];
            b(this.node.pnls, ".mm-panel").forEach(function(e) {
                    e !== n && (e.classList.remove("mm-panel_opened"),
                        e.classList.remove("mm-panel_opened-parent"),
                        e.classList.remove("mm-panel_highest"),
                        e.classList.add("mm-hidden"))
                }),
                this.openPanel(n, !1),
                this.trigger("closeAllPanels:after")
        },
        P.prototype.togglePanel = function(e) {
            var t = e.parentElement;
            t.matches(".mm-listitem_vertical") && this[t.matches(".mm-listitem_opened") ? "closePanel" : "openPanel"](e)
        },
        P.prototype.setSelected = function(e) {
            this.trigger("setSelected:before", [e]),
                v(this.node.menu, ".mm-listitem_selected").forEach(function(e) {
                    e.classList.remove("mm-listitem_selected")
                }),
                e.classList.add("mm-listitem_selected"),
                this.trigger("setSelected:after", [e])
        },
        P.prototype.bind = function(e, t) {
            this.hook[e] = this.hook[e] || [],
                this.hook[e].push(t)
        },
        P.prototype.trigger = function(e, t) {
            if (this.hook[e])
                for (var n = 0, i = this.hook[e].length; n < i; n++)
                    this.hook[e][n].apply(this, t)
        },
        P.prototype._initAPI = function() {
            var e = this,
                n = this;
            this.API = {},
                this._api.forEach(function(t) {
                    e.API[t] = function() {
                        var e = n[t].apply(n, arguments);
                        return void 0 === e ? n.API : e
                    }
                }),
                this.node.menu.mmApi = this.API
        },
        P.prototype._initHooks = function() {
            for (var e in this.opts.hooks)
                this.bind(e, this.opts.hooks[e])
        },
        P.prototype._initWrappers = function() {
            this.trigger("initWrappers:before");
            for (var e = 0; e < this.opts.wrappers.length; e++) {
                var t = P.wrappers[this.opts.wrappers[e]];
                "function" == typeof t && t.call(this)
            }
            this.trigger("initWrappers:after")
        },
        P.prototype._initAddons = function() {
            for (var e in this.trigger("initAddons:before"),
                    P.addons)
                P.addons[e].call(this);
            this.trigger("initAddons:after")
        },
        P.prototype._initExtensions = function() {
            var n = this;
            this.trigger("initExtensions:before"),
                "array" == m(this.opts.extensions) && (this.opts.extensions = {
                    all: this.opts.extensions
                }),
                Object.keys(this.opts.extensions).forEach(function(e) {
                    var t = n.opts.extensions[e].map(function(e) {
                        return "mm-menu_" + e
                    });
                    t.length && E(e, function() {
                        t.forEach(function(e) {
                            n.node.menu.classList.add(e)
                        })
                    }, function() {
                        t.forEach(function(e) {
                            n.node.menu.classList.remove(e)
                        })
                    })
                }),
                this.trigger("initExtensions:after")
        },
        P.prototype._initMenu = function() {
            var t = this;
            this.trigger("initMenu:before"),
                this.node.wrpr = this.node.wrpr || this.node.menu.parentElement,
                this.node.wrpr.classList.add("mm-wrapper"),
                this.node.menu.id = this.node.menu.id || d();
            var n = h("div.mm-panels");
            b(this.node.menu).forEach(function(e) {
                    -1 < t.conf.panelNodetype.indexOf(e.nodeName.toLowerCase()) && n.append(e)
                }),
                this.node.menu.append(n),
                this.node.pnls = n,
                this.node.menu.classList.add("mm-menu"),
                this.trigger("initMenu:after")
        },
        P.prototype._initPanels = function() {
            var s = this;
            this.trigger("initPanels:before"),
                this.clck.push(function(e, t) {
                    if (t.inMenu) {
                        var n = e.getAttribute("href");
                        if (n && 1 < n.length && "#" == n.slice(0, 1))
                            try {
                                var i = v(s.node.menu, n)[0];
                                if (i && i.matches(".mm-panel"))
                                    return e.parentElement.matches(".mm-listitem_vertical") ? s.togglePanel(i) : s.openPanel(i), !0
                            } catch (e) {}
                    }
                }),
                b(this.node.pnls).forEach(function(e) {
                    s.initPanel(e)
                }),
                this.trigger("initPanels:after")
        },
        P.prototype.initPanel = function(e) {
            var t = this,
                n = this.conf.panelNodetype.join(", ");
            if (e.matches(n) && (e.matches(".mm-panel") || (e = this._initPanel(e)),
                    e)) {
                var i = [];
                i.push.apply(i, b(e, "." + this.conf.classNames.panel)),
                    b(e, ".mm-listview").forEach(function(e) {
                        b(e, ".mm-listitem").forEach(function(e) {
                            i.push.apply(i, b(e, n))
                        })
                    }),
                    i.forEach(function(e) {
                        t.initPanel(e)
                    })
            }
        },
        P.prototype._initPanel = function(e) {
            var t = this;
            if (this.trigger("initPanel:before", [e]),
                y(e, this.conf.classNames.panel, "mm-panel"),
                y(e, this.conf.classNames.nopanel, "mm-nopanel"),
                y(e, this.conf.classNames.inset, "mm-listview_inset"),
                e.matches(".mm-listview_inset") && e.classList.add("mm-nopanel"),
                e.matches(".mm-nopanel"))
                return null;
            var n = e.id || d(),
                i = e.matches("." + this.conf.classNames.vertical) || !this.opts.slidingSubmenus;
            if (e.classList.remove(this.conf.classNames.vertical),
                e.matches("ul, ol")) {
                e.removeAttribute("id");
                var s = h("div");
                e.before(s),
                    s.append(e),
                    e = s
            }
            e.id = n,
                e.classList.add("mm-panel"),
                e.classList.add("mm-hidden");
            var a = [e.parentElement].filter(function(e) {
                return e.matches("li")
            })[0];
            if (i ? a && a.classList.add("mm-listitem_vertical") : this.node.pnls.append(e),
                a && ((a.mmChild = e).mmParent = a) && a.matches(".mm-listitem") && !b(a, ".mm-btn").length) {
                var o = b(a, ".mm-listitem__text")[0];
                if (o) {
                    var r = h("a.mm-btn.mm-btn_next.mm-listitem__btn");
                    r.setAttribute("href", "#" + e.id),
                        o.matches("span") ? (r.classList.add("mm-listitem__text"),
                            r.innerHTML = o.innerHTML,
                            a.insertBefore(r, o.nextElementSibling),
                            o.remove()) : a.insertBefore(r, b(a, ".mm-panel")[0])
                }
            }
            return this._initNavbar(e),
                b(e, "ul, ol").forEach(function(e) {
                    t.initListview(e)
                }),
                this.trigger("initPanel:after", [e]),
                e
        },
        P.prototype._initNavbar = function(e) {
            if (this.trigger("initNavbar:before", [e]), !b(e, ".mm-navbar").length) {
                var t = null,
                    n = null;
                if (e.dataset.mmParent ? n = v(this.node.pnls, e.dataset.mmParent)[0] : (t = e.mmParent) && (n = t.closest(".mm-panel")), !t || !t.matches(".mm-listitem_vertical")) {
                    var i = h("div.mm-navbar");
                    if (this.opts.navbar.add ? this.opts.navbar.sticky && i.classList.add("mm-navbar_sticky") : i.classList.add("mm-hidden"),
                        n) {
                        var s = h("a.mm-btn.mm-btn_prev.mm-navbar__btn");
                        s.setAttribute("href", "#" + n.id),
                            i.append(s)
                    }
                    var a = null;
                    t ? a = b(t, ".mm-listitem__text")[0] : n && (a = v(n, 'a[href="#' + e.id + '"]')[0]);
                    var o = h("a.mm-navbar__title");
                    switch (o.innerHTML = e.dataset.mmTitle || (a ? a.textContent : "") || this.i18n(this.opts.navbar.title) || this.i18n("Menu"),
                        this.opts.navbar.titleLink) {
                        case "anchor":
                            a && o.setAttribute("href", a.getAttribute("href"));
                            break;
                        case "parent":
                            n && o.setAttribute("href", "#" + n.id)
                    }
                    i.append(o),
                        e.prepend(i),
                        this.trigger("initNavbar:after", [e])
                }
            }
        },
        P.prototype.initListview = function(e) {
            var t = this;
            this.trigger("initListview:before", [e]),
                y(e, this.conf.classNames.nolistview, "mm-nolistview"),
                e.matches(".mm-nolistview") || (e.classList.add("mm-listview"),
                    b(e).forEach(function(e) {
                        e.classList.add("mm-listitem"),
                            y(e, t.conf.classNames.selected, "mm-listitem_selected"),
                            b(e, "a, span").forEach(function(e) {
                                e.matches(".mm-btn") || e.classList.add("mm-listitem__text")
                            })
                    })),
                this.trigger("initListview:after", [e])
        },
        P.prototype._initOpened = function() {
            this.trigger("initOpened:before");
            var e = this.node.pnls.querySelectorAll(".mm-listitem_selected"),
                t = null;
            e.forEach(function(e) {
                    (t = e).classList.remove("mm-listitem_selected")
                }),
                t && t.classList.add("mm-listitem_selected");
            var n = t ? t.closest(".mm-panel") : b(this.node.pnls, ".mm-panel")[0];
            this.openPanel(n, !1),
                this.trigger("initOpened:after")
        },
        P.prototype._initAnchors = function() {
            var o = this;
            this.trigger("initAnchors:before"),
                document.addEventListener("click", function(e) {
                    var t = e.target.closest("a[href]");
                    if (t) {
                        for (var n = {
                                inMenu: t.closest(".mm-menu") === o.node.menu,
                                inListview: t.matches(".mm-listitem > a"),
                                toExternal: t.matches('[rel="external"]') || t.matches('[target="_blank"]')
                            }, i = {
                                close: null,
                                setSelected: null,
                                preventDefault: "#" == t.getAttribute("href").slice(0, 1)
                            }, s = 0; s < o.clck.length; s++) {
                            var a = o.clck[s].call(o, t, n);
                            if (a) {
                                if ("boolean" == typeof a)
                                    return void e.preventDefault();
                                "object" == m(a) && (i = l(a, i))
                            }
                        }
                        n.inMenu && n.inListview && !n.toExternal && (r(t, o.opts.onClick.setSelected, i.setSelected) && o.setSelected(t.parentElement),
                            r(t, o.opts.onClick.preventDefault, i.preventDefault) && e.preventDefault(),
                            r(t, o.opts.onClick.close, i.close) && o.opts.offCanvas && "function" == typeof o.close && o.close())
                    }
                }, !0),
                this.trigger("initAnchors:after")
        },
        P.prototype.i18n = function(e) {
            return t = e,
                "string" == typeof(n = this.conf.language) && void 0 !== f[n] && f[n][t] || t;
            var t, n
        },
        P.version = "8.4.0",
        P.options = i,
        P.configs = s,
        P.addons = {},
        P.wrappers = {},
        P.node = {},
        P.vars = {},
        P);

    function P(e, t, n) {
        return this.opts = l(t, P.options),
            this.conf = l(n, P.configs),
            this._api = ["bind", "initPanel", "initListview", "openPanel", "closePanel", "closeAllPanels", "setSelected"],
            this.node = {},
            this.vars = {},
            this.hook = {},
            this.clck = [],
            this.node.menu = "string" == typeof e ? document.querySelector(e) : e,
            "function" == typeof this._deprecatedWarnings && this._deprecatedWarnings(),
            this._initWrappers(),
            this._initAddons(),
            this._initExtensions(),
            this._initHooks(),
            this._initAPI(),
            this._initMenu(),
            this._initPanels(),
            this._initOpened(),
            this._initAnchors(),
            function() {
                function e(t) {
                    var n = window.matchMedia(t);
                    w(t, n),
                        n.onchange = function(e) {
                            w(t, n)
                        }
                }
                for (var t in L)
                    e(t)
            }(),
            this
    }

    function k(e) {
        return e ? e.charAt(0).toUpperCase() + e.slice(1) : ""
    }

    function S(e, t, n) {
        var i = t.split(".");
        e[t = "mmEvent" + k(i[0]) + k(i[1])] = e[t] || [],
            e[t].push(n),
            e.addEventListener(i[0], n)
    }

    function M(t, e) {
        var n = e.split(".");
        e = "mmEvent" + k(n[0]) + k(n[1]),
            (t[e] || []).forEach(function(e) {
                t.removeEventListener(n[0], e)
            })
    }
    x.options.offCanvas = {
            blockUI: !0,
            moveBackground: !0
        },
        x.configs.offCanvas = {
            clone: !1,
            menu: {
                insertMethod: "prepend",
                insertSelector: "body"
            },
            page: {
                nodetype: "div",
                selector: null,
                noSelector: []
            }
        },
        x.prototype.open = function() {
            var e = this;
            this.trigger("open:before"),
                this.vars.opened || (this._openSetup(),
                    setTimeout(function() {
                        e._openStart()
                    }, this.conf.openingInterval),
                    this.trigger("open:after"))
        },
        x.prototype._openSetup = function() {
            var e, t, n, i = this,
                s = this.opts.offCanvas;
            this.closeAllOthers(),
                x.node.page.mmStyle = x.node.page.getAttribute("style") || "",
                e = window,
                t = {
                    force: !0
                },
                n = "resize.page".split("."),
                (e["mmEvent" + k(n[0]) + k(n[1])] || []).forEach(function(e) {
                    e(t)
                });
            var a = ["mm-wrapper_opened"];
            s.blockUI && a.push("mm-wrapper_blocking"),
                "modal" == s.blockUI && a.push("mm-wrapper_modal"),
                s.moveBackground && a.push("mm-wrapper_background"),
                a.forEach(function(e) {
                    i.node.wrpr.classList.add(e)
                }),
                setTimeout(function() {
                    i.vars.opened = !0
                }, this.conf.openingInterval),
                this.node.menu.classList.add("mm-menu_opened")
        },
        x.prototype._openStart = function() {
            var e = this;
            c(x.node.page, function() {
                    e.trigger("open:finish")
                }, this.conf.transitionDuration),
                this.trigger("open:start"),
                this.node.wrpr.classList.add("mm-wrapper_opening")
        },
        x.prototype.close = function() {
            var t = this;
            this.trigger("close:before"),
                this.vars.opened && (c(x.node.page, function() {
                        t.node.menu.classList.remove("mm-menu_opened"), ["mm-wrapper_opened", "mm-wrapper_blocking", "mm-wrapper_modal", "mm-wrapper_background"].forEach(function(e) {
                                t.node.wrpr.classList.remove(e)
                            }),
                            x.node.page.setAttribute("style", x.node.page.mmStyle),
                            t.vars.opened = !1,
                            t.trigger("close:finish")
                    }, this.conf.transitionDuration),
                    this.trigger("close:start"),
                    this.node.wrpr.classList.remove("mm-wrapper_opening"),
                    this.trigger("close:after"))
        },
        x.prototype.closeAllOthers = function() {
            var n = this;
            v(document.body, ".mm-menu_offcanvas").forEach(function(e) {
                if (e !== n.node.menu) {
                    var t = e.mmApi;
                    t && t.close && t.close()
                }
            })
        },
        x.prototype.setPage = function(e) {
            this.trigger("setPage:before", [e]);
            var t = this.conf.offCanvas;
            if (!e) {
                var n = "string" == typeof t.page.selector ? v(document.body, t.page.selector) : b(document.body, t.page.nodetype);
                if (n = n.filter(function(e) {
                        return !e.matches(".mm-menu, .mm-wrapper__blocker")
                    }),
                    t.page.noSelector.length && (n = n.filter(function(e) {
                        return !e.matches(t.page.noSelector.join(", "))
                    })),
                    1 < n.length) {
                    var i = h("div");
                    n[0].before(i),
                        n.forEach(function(e) {
                            i.append(e)
                        }),
                        n = [i]
                }
                e = n[0]
            }
            e.classList.add("mm-page"),
                e.classList.add("mm-slideout"),
                e.id = e.id || d(),
                x.node.page = e,
                this.trigger("setPage:after", [e])
        };
    var T;
    p({
            "Close menu": "Menu sluiten",
            "Close submenu": "Submenu sluiten",
            "Open submenu": "Submenu openen",
            "Toggle submenu": "Submenu wisselen"
        }, "nl"),
        p({
            "Close menu": "بستن منو",
            "Close submenu": "بستن زیرمنو",
            "Open submenu": "بازکردن زیرمنو",
            "Toggle submenu": "سوییچ زیرمنو"
        }, "fa"),
        p({
            "Close menu": "Menü schließen",
            "Close submenu": "Untermenü schließen",
            "Open submenu": "Untermenü öffnen",
            "Toggle submenu": "Untermenü wechseln"
        }, "de"),
        p({
            "Close menu": "Закрыть меню",
            "Close submenu": "Закрыть подменю",
            "Open submenu": "Открыть подменю",
            "Toggle submenu": "Переключить подменю"
        }, "ru"),
        x.options.screenReader = {
            aria: !0,
            text: !0
        },
        x.configs.screenReader = {
            text: {
                closeMenu: "Close menu",
                closeSubmenu: "Close submenu",
                openSubmenu: "Open submenu",
                toggleSubmenu: "Toggle submenu"
            }
        },
        T = function(e, t, n) {
            (e[t] = n) ? e.setAttribute(t, n.toString()): e.removeAttribute(t)
        },
        x.sr_aria = function(e, t, n) {
            T(e, "aria-" + t, n)
        },
        x.sr_role = function(e, t) {
            T(e, "role", t)
        },
        x.sr_text = function(e) {
            return '<span class="mm-sronly">' + e + "</span>"
        };
    var A = "ontouchstart" in window || !!navigator.msMaxTouchPoints || !1;
    x.options.scrollBugFix = {
        fix: !0
    };
    x.options.autoHeight = {
            height: "default"
        },
        x.options.backButton = {
            close: !(x.options.autoHeight = {
                height: "default"
            }),
            open: !1
        },
        x.options.columns = {
            add: !(x.options.backButton = {
                close: !(x.options.autoHeight = {
                    height: "default"
                }),
                open: !1
            }),
            visible: {
                min: 1,
                max: 3
            }
        };
    x.options.counters = {
        add: !(x.options.columns = {
            add: !(x.options.backButton = {
                close: !(x.options.autoHeight = {
                    height: "default"
                }),
                open: !1
            }),
            visible: {
                min: 1,
                max: 3
            }
        }),
        addTo: "panels",
        count: !1
    };
    x.configs.classNames.counters = {
        counter: "Counter"
    };
    x.options.dividers = {
        add: !(x.configs.classNames.counters = {
            counter: "Counter"
        }),
        addTo: "panels"
    };
    x.configs.classNames.divider = "Divider";

    function C(e, t) {
        return "string" == typeof e && "%" == e.slice(-1) && (e = t * ((e = parseInt(e.slice(0, -1), 10)) / 100)),
            e
    }

    function N(t, n, e) {
        switch (t.position = "left",
            t.zposition = "back", ["right", "top", "bottom"].forEach(function(e) {
                -1 < n.indexOf("position-" + e) && (t.position = e)
            }), ["front", "top", "bottom"].forEach(function(e) {
                -1 < n.indexOf("position-" + e) && (t.zposition = "front")
            }),
            q.area = {
                top: "bottom" == t.position ? "75%" : 0,
                right: "left" == t.position ? "75%" : 0,
                bottom: "top" == t.position ? "75%" : 0,
                left: "right" == t.position ? "75%" : 0
            },
            t.position) {
            case "top":
            case "bottom":
                t.axis = "y";
                break;
            default:
                t.axis = "x"
        }
        switch (t.position) {
            case "top":
                t.direction = "Down";
                break;
            case "right":
                t.direction = "Left";
                break;
            case "bottom":
                t.direction = "Up";
                break;
            default:
                t.direction = "Right"
        }
        switch (t.zposition) {
            case "front":
                t.slideOutNodes = [e];
                break;
            default:
                t.slideOutNodes = v(document.body, ".mm-slideout")
        }
        return t
    }
    var H = "ontouchstart" in window || !!navigator.msMaxTouchPoints || !1,
        j = {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        },
        I = {
            start: 15,
            swipe: 15
        },
        O = {
            x: ["Right", "Left"],
            y: ["Down", "Up"]
        },
        D = (R.prototype.start = function(e) {
                var t = this.surface.clientWidth,
                    n = this.surface.clientHeight,
                    i = C(this.area.top, n);
                if (!("number" == typeof i && e.pageY < i)) {
                    var s = C(this.area.right, t);
                    if (!("number" == typeof s && (s = t - s,
                            e.pageX > s))) {
                        var a = C(this.area.bottom, n);
                        if (!("number" == typeof a && (a = n - a,
                                e.pageY > a))) {
                            var o = C(this.area.left, t);
                            "number" == typeof o && e.pageX < o || (this.startPosition = {
                                    x: e.pageX,
                                    y: e.pageY
                                },
                                this.state = 1)
                        }
                    }
                }
            },
            R.prototype.stop = function(e) {
                if (2 == this.state) {
                    var t = this._dragDirection(),
                        n = this._eventDetail(t);
                    if (this._dispatchEvents("drag*End", n),
                        Math.abs(this.movement[this.axis]) > this.treshold.swipe) {
                        var i = this._swipeDirection();
                        n.direction = i,
                            this._dispatchEvents("swipe*", n)
                    }
                }
                this.state = 0
            },
            R.prototype.move = function(e) {
                switch (this.state) {
                    case 1:
                    case 2:
                        this.movement = {
                                x: e.movementX,
                                y: e.movementY
                            },
                            this.distance = {
                                x: e.pageX - this.startPosition.x,
                                y: e.pageY - this.startPosition.y
                            },
                            this.axis = Math.abs(this.distance.x) > Math.abs(this.distance.y) ? "x" : "y";
                        var t = this._dragDirection(),
                            n = this._eventDetail(t);
                        1 == this.state && Math.abs(this.distance[this.axis]) > this.treshold.start && (this._dispatchEvents("drag*Start", n),
                                this.state = 2),
                            2 == this.state && this._dispatchEvents("drag*Move", n)
                }
            },
            R.prototype._eventDetail = function(e) {
                var t = this.distance.x,
                    n = this.distance.y;
                return "x" == this.axis && (t -= 0 < t ? this.treshold.start : 0 - this.treshold.start),
                    "y" == this.axis && (n -= 0 < n ? this.treshold.start : 0 - this.treshold.start), {
                        axis: this.axis,
                        direction: e,
                        movementX: this.movement.x,
                        movementY: this.movement.y,
                        distanceX: t,
                        distanceY: n
                    }
            },
            R.prototype._dispatchEvents = function(e, t) {
                var n = new CustomEvent(e.replace("*", ""), {
                    detail: t
                });
                this.surface.dispatchEvent(n);
                var i = new CustomEvent(e.replace("*", this.axis.toUpperCase()), {
                    detail: t
                });
                this.surface.dispatchEvent(i);
                var s = new CustomEvent(e.replace("*", t.direction), {
                    detail: t
                });
                this.surface.dispatchEvent(s)
            },
            R.prototype._dragDirection = function() {
                return O[this.axis][0 < this.distance[this.axis] ? 0 : 1]
            },
            R.prototype._swipeDirection = function() {
                return O[this.axis][0 < this.movement[this.axis] ? 0 : 1]
            },
            R),
        q = null,
        B = null,
        z = 0;

    function R(e, t, n) {
        this.surface = e,
            this.area = l(t, j),
            this.treshold = l(n, I),
            this.surface.mmHasDragEvents || (this.surface.addEventListener(H ? "touchstart" : "mousedown", this.start.bind(this)),
                this.surface.addEventListener(H ? "touchend" : "mouseup", this.stop.bind(this)),
                this.surface.addEventListener(H ? "touchleave" : "mouseleave", this.stop.bind(this)),
                this.surface.addEventListener(H ? "touchmove" : "mousemove", this.move.bind(this))),
            this.surface.mmHasDragEvents = !0
    }
    x.options.drag = {
        open: !(x.configs.classNames.divider = "Divider"),
        node: null
    };
    x.options.dropdown = {
            drop: !(x.options.drag = {
                open: !(x.configs.classNames.divider = "Divider"),
                node: null
            }),
            fitViewport: !0,
            event: "click",
            position: {},
            tip: !0
        },
        x.configs.dropdown = {
            offset: {
                button: {
                    x: -5,
                    y: 5
                },
                viewport: {
                    x: 20,
                    y: 20
                }
            },
            height: {
                max: 880
            },
            width: {
                max: 440
            }
        };
    x.configs.fixedElements = {
        insertMethod: "append",
        insertSelector: "body"
    };
    x.configs.classNames.fixedElements = {
            fixed: "Fixed"
        },
        x.options.iconbar = {
            use: !(x.configs.classNames.fixedElements = {
                fixed: "Fixed"
            }),
            top: [],
            bottom: [],
            position: "left",
            type: "default"
        },
        x.options.iconPanels = {
            add: !(x.options.iconbar = {
                use: !(x.configs.classNames.fixedElements = {
                    fixed: "Fixed"
                }),
                top: [],
                bottom: [],
                position: "left",
                type: "default"
            }),
            blockPanel: !0,
            hideDivider: !1,
            hideNavbar: !0,
            visible: 3
        };
    x.options.keyboardNavigation = {
        enable: !(x.options.iconPanels = {
            add: !(x.options.iconbar = {
                use: !(x.configs.classNames.fixedElements = {
                    fixed: "Fixed"
                }),
                top: [],
                bottom: [],
                position: "left",
                type: "default"
            }),
            blockPanel: !0,
            hideDivider: !1,
            hideNavbar: !0,
            visible: 3
        }),
        enhance: !1
    };
    x.options.lazySubmenus = {
        load: !1
    };

    function U() {
        var l = this,
            e = this.opts.navbars;
        if (void 0 !== e) {
            e instanceof Array || (e = [e]);
            var d = {};
            e.length && (e.forEach(function(e) {
                    if (!("boolean" == typeof(t = e) && t && (t = {}),
                            "object" != typeof t && (t = {}),
                            void 0 === t.content && (t.content = ["prev", "title"]),
                            t.content instanceof Array || (t.content = [t.content]),
                            void 0 === t.use && (t.use = !0),
                            "boolean" == typeof t.use && t.use && (t.use = !0),
                            e = t).use)
                        return !1;
                    var t, n = h("div.mm-navbar"),
                        i = e.position;
                    "bottom" !== i && (i = "top"),
                        d[i] || (d[i] = h("div.mm-navbars_" + i)),
                        d[i].append(n);
                    for (var s = 0, a = e.content.length; s < a; s++) {
                        var o, r = e.content[s];
                        if ("string" == typeof r)
                            if ("function" == typeof(o = U.navbarContents[r]))
                                o.call(l, n);
                            else {
                                var m = h("span");
                                m.innerHTML = r;
                                var c = b(m);
                                1 == c.length && (m = c[0]),
                                    n.append(m)
                            }
                        else
                            n.append(r)
                    }
                    "string" == typeof e.type && "function" == typeof(o = U.navbarTypes[e.type]) && o.call(l, n),
                        "boolean" != typeof e.use && E(e.use, function() {
                            n.classList.remove("mm-hidden"),
                                x.sr_aria(n, "hidden", !1)
                        }, function() {
                            n.classList.add("mm-hidden"),
                                x.sr_aria(n, "hidden", !0)
                        })
                }),
                this.bind("initMenu:after", function() {
                    for (var e in d)
                        l.node.menu["bottom" == e ? "append" : "prepend"](d[e])
                }))
        }
    }
    x.options.navbars = [],
        x.configs.navbars = {
            breadcrumbs: {
                separator: "/",
                removeFirst: !(x.options.lazySubmenus = {
                    load: !1
                })
            }
        },
        x.configs.classNames.navbars = {
            panelNext: "Next",
            panelPrev: "Prev",
            panelTitle: "Title"
        },
        U.navbarContents = {
            breadcrumbs: function(e) {
                var r = this,
                    n = h("div.mm-navbar__breadcrumbs");
                e.append(n),
                    this.bind("initNavbar:after", function(e) {
                        if (!e.querySelector(".mm-navbar__breadcrumbs")) {
                            b(e, ".mm-navbar")[0].classList.add("mm-hidden");
                            for (var t = [], n = h("span.mm-navbar__breadcrumbs"), i = e, s = !0; i;) {
                                if (!(i = i.closest(".mm-panel")).parentElement.matches(".mm-listitem_vertical")) {
                                    var a = v(i, ".mm-navbar__title")[0];
                                    if (a) {
                                        var o = a.textContent;
                                        o.length && t.unshift(s ? "<span>" + o + "</span>" : '<a href="#' + i.id + '">' + o + "</a>")
                                    }
                                    s = !1
                                }
                                i = i.mmParent
                            }
                            r.conf.navbars.breadcrumbs.removeFirst && t.shift(),
                                n.innerHTML = t.join('<span class="mm-separator">' + r.conf.navbars.breadcrumbs.separator + "</span>"),
                                b(e, ".mm-navbar")[0].append(n)
                        }
                    }),
                    this.bind("openPanel:start", function(e) {
                        var t = e.querySelector(".mm-navbar__breadcrumbs");
                        n.innerHTML = t ? t.innerHTML : ""
                    }),
                    this.bind("initNavbar:after:sr-aria", function(e) {
                        v(e, ".mm-breadcrumbs a").forEach(function(e) {
                            x.sr_aria(e, "owns", e.getAttribute("href").slice(1))
                        })
                    })
            },
            close: function(e) {
                var t = this,
                    n = h("a.mm-btn.mm-btn_close.mm-navbar__btn");
                e.append(n),
                    this.bind("setPage:after", function(e) {
                        n.setAttribute("href", "#" + e.id)
                    }),
                    this.bind("setPage:after:sr-text", function() {
                        n.innerHTML = x.sr_text(t.i18n(t.conf.screenReader.text.closeMenu)),
                            x.sr_aria(n, "owns", n.getAttribute("href").slice(1))
                    })
            },
            next: function(e) {
                var t, n, i, s = this,
                    a = h("a.mm-btn.mm-btn_next.mm-navbar__btn");
                e.append(a),
                    this.bind("openPanel:start", function(e) {
                        t = e.querySelector("." + s.conf.classNames.navbars.panelNext),
                            n = t ? t.getAttribute("href") : "",
                            i = t ? t.innerHTML : "",
                            n ? a.setAttribute("href", n) : a.removeAttribute("href"),
                            a.classList[n || i ? "remove" : "add"]("mm-hidden"),
                            a.innerHTML = i
                    }),
                    this.bind("openPanel:start:sr-aria", function(e) {
                        x.sr_aria(a, "hidden", a.matches("mm-hidden")),
                            x.sr_aria(a, "owns", (a.getAttribute("href") || "").slice(1))
                    })
            },
            prev: function(e) {
                var t, n, i, s = this,
                    a = h("a.mm-btn.mm-btn_prev.mm-navbar__btn");
                e.append(a),
                    this.bind("initNavbar:after", function(e) {
                        b(e, ".mm-navbar")[0].classList.add("mm-hidden")
                    }),
                    this.bind("openPanel:start", function(e) {
                        e.parentElement.matches(".mm-listitem_vertical") || ((t = e.querySelector("." + s.conf.classNames.navbars.panelPrev)) || (t = e.querySelector(".mm-navbar__btn.mm-btn_prev")),
                            n = t ? t.getAttribute("href") : "",
                            i = t ? t.innerHTML : "",
                            n ? a.setAttribute("href", n) : a.removeAttribute("href"),
                            a.classList[n || i ? "remove" : "add"]("mm-hidden"),
                            a.innerHTML = i)
                    }),
                    this.bind("initNavbar:after:sr-aria", function(e) {
                        x.sr_aria(e.querySelector(".mm-navbar"), "hidden", !0)
                    }),
                    this.bind("openPanel:start:sr-aria", function(e) {
                        x.sr_aria(a, "hidden", a.matches(".mm-hidden")),
                            x.sr_aria(a, "owns", (a.getAttribute("href") || "").slice(1))
                    })
            },
            searchfield: function(e) {
                "object" != m(this.opts.searchfield) && (this.opts.searchfield = {});
                var t = h("div.mm-navbar__searchfield");
                e.append(t),
                    this.opts.searchfield.add = !0,
                    this.opts.searchfield.addTo = [t]
            },
            title: function(e) {
                var t, n, i, s, a = this,
                    o = h("a.mm-navbar__title");
                e.append(o),
                    this.bind("openPanel:start", function(e) {
                        e.parentElement.matches(".mm-listitem_vertical") || ((i = e.querySelector("." + a.conf.classNames.navbars.panelTitle)) || (i = e.querySelector(".mm-navbar__title")),
                            (t = i ? i.getAttribute("href") : "") ? o.setAttribute("href", t) : o.removeAttribute("href"),
                            n = i ? i.innerHTML : "",
                            o.innerHTML = n)
                    }),
                    this.bind("openPanel:start:sr-aria", function(e) {
                        if (a.opts.screenReader.text && (s || b(a.node.menu, ".mm-navbars_top, .mm-navbars_bottom").forEach(function(e) {
                                    var t = e.querySelector(".mm-btn_prev");
                                    t && (s = t)
                                }),
                                s)) {
                            var t = !0;
                            "parent" == a.opts.navbar.titleLink && (t = !s.matches(".mm-hidden")),
                                x.sr_aria(o, "hidden", t)
                        }
                    })
            }
        };
    U.navbarTypes = {
        tabs: function(e) {
            var n = this;
            e.classList.add("mm-navbar_tabs"),
                e.parentElement.classList.add("mm-navbars_has-tabs");
            var s = b(e, "a");
            e.addEventListener("click", function(e) {
                    var t = e.target;
                    if (t.matches("a"))
                        if (t.matches(".mm-navbar__tab_selected"))
                            e.stopImmediatePropagation();
                        else
                            try {
                                n.openPanel(n.node.menu.querySelector(t.getAttribute("href")), !1),
                                    e.stopImmediatePropagation()
                            } catch (e) {}
                }),
                this.bind("openPanel:start", function e(t) {
                    s.forEach(function(e) {
                        e.classList.remove("mm-navbar__tab_selected")
                    });
                    var n = s.filter(function(e) {
                        return e.matches('[href="#' + t.id + '"]')
                    })[0];
                    if (n)
                        n.classList.add("mm-navbar__tab_selected");
                    else {
                        var i = t.mmParent;
                        i && e.call(this, i.closest(".mm-panel"))
                    }
                })
        }
    };
    x.options.pageScroll = {
        scroll: !(U.navbarTypes = {
            tabs: function(e) {
                var n = this;
                e.classList.add("mm-navbar_tabs"),
                    e.parentElement.classList.add("mm-navbars_has-tabs");
                var s = b(e, "a");
                e.addEventListener("click", function(e) {
                        var t = e.target;
                        if (t.matches("a"))
                            if (t.matches(".mm-navbar__tab_selected"))
                                e.stopImmediatePropagation();
                            else
                                try {
                                    n.openPanel(n.node.menu.querySelector(t.getAttribute("href")), !1),
                                        e.stopImmediatePropagation()
                                } catch (e) {}
                    }),
                    this.bind("openPanel:start", function e(t) {
                        s.forEach(function(e) {
                            e.classList.remove("mm-navbar__tab_selected")
                        });
                        var n = s.filter(function(e) {
                            return e.matches('[href="#' + t.id + '"]')
                        })[0];
                        if (n)
                            n.classList.add("mm-navbar__tab_selected");
                        else {
                            var i = t.mmParent;
                            i && e.call(this, i.closest(".mm-panel"))
                        }
                    })
            }
        }),
        update: !1
    };
    x.configs.pageScroll = {
        scrollOffset: 0,
        updateOffset: 50
    };
    p({
            Search: "Zoeken",
            "No results found.": "Geen resultaten gevonden.",
            cancel: "annuleren"
        }, "nl"),
        p({
            Search: "جستجو",
            "No results found.": "نتیجه‌ای یافت نشد.",
            cancel: "انصراف"
        }, "fa"),
        p({
            Search: "Suche",
            "No results found.": "Keine Ergebnisse gefunden.",
            cancel: "beenden"
        }, "de"),
        p({
            Search: "Найти",
            "No results found.": "Ничего не найдено.",
            cancel: "отменить"
        }, "ru"),
        x.options.searchfield = {
            add: !(x.configs.pageScroll = {
                scrollOffset: 0,
                updateOffset: 50
            }),
            addTo: "panels",
            cancel: !1,
            noResults: "No results found.",
            placeholder: "Search",
            panel: {
                add: !1,
                dividers: !0,
                fx: "none",
                id: null,
                splash: null,
                title: "Search"
            },
            search: !0,
            showTextItems: !1,
            showSubPanels: !0
        },
        x.configs.searchfield = {
            clear: !1,
            form: !1,
            input: !1,
            submit: !1
        };
    var F;
    x.prototype.search = function(i, s) {
            var e, a = this,
                o = this.opts.searchfield;
            this.conf.searchfield,
                s = (s = s || "" + i.value).toLowerCase().trim();
            var t = i.mmSearchfield,
                n = v(i.closest(".mm-searchfield"), ".mm-btn"),
                r = b(this.node.pnls, ".mm-panel_search")[0],
                m = t.panels,
                c = t.noresults,
                l = t.listitems,
                d = t.dividers;
            if (l.forEach(function(e) {
                    e.classList.remove("mm-listitem_nosubitems"),
                        e.classList.remove("mm-listitem_onlysubitems"),
                        e.classList.remove("mm-hidden")
                }),
                r && (b(r, ".mm-listview")[0].innerHTML = ""),
                m.forEach(function(e) {
                    e.scrollTop = 0
                }),
                s.length) {
                d.forEach(function(e) {
                        e.classList.add("mm-hidden")
                    }),
                    l.forEach(function(e) {
                        var t, n = b(e, ".mm-listitem__text")[0],
                            i = !1;
                        n && -1 < (t = n,
                                Array.prototype.slice.call(t.childNodes).filter(function(e) {
                                    return 3 == e.nodeType
                                }).map(function(e) {
                                    return e.textContent
                                }).join(" ")).toLowerCase().indexOf(s) && (n.matches(".mm-listitem__btn") ? o.showSubPanels && (i = !0) : n.matches("a") ? i = !0 : o.showTextItems && (i = !0)),
                            i || e.classList.add("mm-hidden")
                    });
                var f = l.filter(function(e) {
                    return !e.matches(".mm-hidden")
                }).length;
                if (o.panel.add) {
                    var p = [];
                    m.forEach(function(e) {
                            var t = g(v(e, ".mm-listitem"));
                            if ((t = t.filter(function(e) {
                                    return !e.matches(".mm-hidden")
                                })).length) {
                                if (o.panel.dividers) {
                                    var n = h("li.mm-divider"),
                                        i = v(e, ".mm-navbar__title")[0];
                                    i && (n.innerHTML = i.innerHTML,
                                        p.push(n))
                                }
                                t.forEach(function(e) {
                                    p.push(e.cloneNode(!0))
                                })
                            }
                        }),
                        p.forEach(function(e) {
                            e.querySelectorAll(".mm-toggle, .mm-check").forEach(function(e) {
                                e.remove()
                            })
                        }),
                        (e = b(r, ".mm-listview")[0]).append.apply(e, p),
                        this.openPanel(r)
                } else
                    o.showSubPanels && m.forEach(function(e) {
                        g(v(e, ".mm-listitem")).forEach(function(e) {
                            var t = e.mmChild;
                            t && v(t, ".mm-listitem").forEach(function(e) {
                                e.classList.remove("mm-hidden")
                            })
                        })
                    }),
                    m.slice().reverse().forEach(function(e, t) {
                        var n = e.mmParent;
                        n && (g(v(e, ".mm-listitem")).length ? (n.matches(".mm-hidden") && n.classList.remove("mm-hidden"),
                            n.classList.add("mm-listitem_onlysubitems")) : i.closest(".mm-panel") || ((e.matches(".mm-panel_opened") || e.matches(".mm-panel_opened-parent")) && setTimeout(function() {
                                a.openPanel(n.closest(".mm-panel"))
                            }, (t + 1) * (1.5 * a.conf.openingInterval)),
                            n.classList.add("mm-listitem_nosubitems")))
                    }),
                    m.forEach(function(e) {
                        g(v(e, ".mm-listitem")).forEach(function(s) {
                            var e = function(e, t) {
                                for (var n = [], i = s.previousElementSibling; i;)
                                    i.matches(t) && n.push(i),
                                    i = i.previousElementSibling;
                                return n
                            }(0, ".mm-divider")[0];
                            e && e.classList.remove("mm-hidden")
                        })
                    });
                n.forEach(function(e) {
                        return e.classList.remove("mm-hidden")
                    }),
                    c.forEach(function(e) {
                        v(e, ".mm-panel__noresultsmsg").forEach(function(e) {
                            return e.classList[f ? "add" : "remove"]("mm-hidden")
                        })
                    }),
                    o.panel.add && (o.panel.splash && v(r, ".mm-panel__content").forEach(function(e) {
                            return e.classList.add("mm-hidden")
                        }),
                        l.forEach(function(e) {
                            return e.classList.remove("mm-hidden")
                        }),
                        d.forEach(function(e) {
                            return e.classList.remove("mm-hidden")
                        }))
            } else if (l.forEach(function(e) {
                    return e.classList.remove("mm-hidden")
                }),
                d.forEach(function(e) {
                    return e.classList.remove("mm-hidden")
                }),
                n.forEach(function(e) {
                    return e.classList.add("mm-hidden")
                }),
                c.forEach(function(e) {
                    v(e, ".mm-panel__noresultsmsg").forEach(function(e) {
                        return e.classList.add("mm-hidden")
                    })
                }),
                o.panel.add)
                if (o.panel.splash)
                    v(r, ".mm-panel__content").forEach(function(e) {
                        return e.classList.remove("mm-hidden")
                    });
                else if (!i.closest(".mm-panel_search")) {
                var u = b(this.node.pnls, ".mm-panel_opened-parent");
                this.openPanel(u.slice(-1)[0])
            }
            this.trigger("updateListview")
        },
        x.options.sectionIndexer = {
            add: !(x.prototype.search = function(i, s) {
                var e, a = this,
                    o = this.opts.searchfield;
                this.conf.searchfield,
                    s = (s = s || "" + i.value).toLowerCase().trim();
                var t = i.mmSearchfield,
                    n = v(i.closest(".mm-searchfield"), ".mm-btn"),
                    r = b(this.node.pnls, ".mm-panel_search")[0],
                    m = t.panels,
                    c = t.noresults,
                    l = t.listitems,
                    d = t.dividers;
                if (l.forEach(function(e) {
                        e.classList.remove("mm-listitem_nosubitems"),
                            e.classList.remove("mm-listitem_onlysubitems"),
                            e.classList.remove("mm-hidden")
                    }),
                    r && (b(r, ".mm-listview")[0].innerHTML = ""),
                    m.forEach(function(e) {
                        e.scrollTop = 0
                    }),
                    s.length) {
                    d.forEach(function(e) {
                            e.classList.add("mm-hidden")
                        }),
                        l.forEach(function(e) {
                            var t, n = b(e, ".mm-listitem__text")[0],
                                i = !1;
                            n && -1 < (t = n,
                                    Array.prototype.slice.call(t.childNodes).filter(function(e) {
                                        return 3 == e.nodeType
                                    }).map(function(e) {
                                        return e.textContent
                                    }).join(" ")).toLowerCase().indexOf(s) && (n.matches(".mm-listitem__btn") ? o.showSubPanels && (i = !0) : n.matches("a") ? i = !0 : o.showTextItems && (i = !0)),
                                i || e.classList.add("mm-hidden")
                        });
                    var f = l.filter(function(e) {
                        return !e.matches(".mm-hidden")
                    }).length;
                    if (o.panel.add) {
                        var p = [];
                        m.forEach(function(e) {
                                var t = g(v(e, ".mm-listitem"));
                                if ((t = t.filter(function(e) {
                                        return !e.matches(".mm-hidden")
                                    })).length) {
                                    if (o.panel.dividers) {
                                        var n = h("li.mm-divider"),
                                            i = v(e, ".mm-navbar__title")[0];
                                        i && (n.innerHTML = i.innerHTML,
                                            p.push(n))
                                    }
                                    t.forEach(function(e) {
                                        p.push(e.cloneNode(!0))
                                    })
                                }
                            }),
                            p.forEach(function(e) {
                                e.querySelectorAll(".mm-toggle, .mm-check").forEach(function(e) {
                                    e.remove()
                                })
                            }),
                            (e = b(r, ".mm-listview")[0]).append.apply(e, p),
                            this.openPanel(r)
                    } else
                        o.showSubPanels && m.forEach(function(e) {
                            g(v(e, ".mm-listitem")).forEach(function(e) {
                                var t = e.mmChild;
                                t && v(t, ".mm-listitem").forEach(function(e) {
                                    e.classList.remove("mm-hidden")
                                })
                            })
                        }),
                        m.slice().reverse().forEach(function(e, t) {
                            var n = e.mmParent;
                            n && (g(v(e, ".mm-listitem")).length ? (n.matches(".mm-hidden") && n.classList.remove("mm-hidden"),
                                n.classList.add("mm-listitem_onlysubitems")) : i.closest(".mm-panel") || ((e.matches(".mm-panel_opened") || e.matches(".mm-panel_opened-parent")) && setTimeout(function() {
                                    a.openPanel(n.closest(".mm-panel"))
                                }, (t + 1) * (1.5 * a.conf.openingInterval)),
                                n.classList.add("mm-listitem_nosubitems")))
                        }),
                        m.forEach(function(e) {
                            g(v(e, ".mm-listitem")).forEach(function(s) {
                                var e = function(e, t) {
                                    for (var n = [], i = s.previousElementSibling; i;)
                                        i.matches(t) && n.push(i),
                                        i = i.previousElementSibling;
                                    return n
                                }(0, ".mm-divider")[0];
                                e && e.classList.remove("mm-hidden")
                            })
                        });
                    n.forEach(function(e) {
                            return e.classList.remove("mm-hidden")
                        }),
                        c.forEach(function(e) {
                            v(e, ".mm-panel__noresultsmsg").forEach(function(e) {
                                return e.classList[f ? "add" : "remove"]("mm-hidden")
                            })
                        }),
                        o.panel.add && (o.panel.splash && v(r, ".mm-panel__content").forEach(function(e) {
                                return e.classList.add("mm-hidden")
                            }),
                            l.forEach(function(e) {
                                return e.classList.remove("mm-hidden")
                            }),
                            d.forEach(function(e) {
                                return e.classList.remove("mm-hidden")
                            }))
                } else if (l.forEach(function(e) {
                        return e.classList.remove("mm-hidden")
                    }),
                    d.forEach(function(e) {
                        return e.classList.remove("mm-hidden")
                    }),
                    n.forEach(function(e) {
                        return e.classList.add("mm-hidden")
                    }),
                    c.forEach(function(e) {
                        v(e, ".mm-panel__noresultsmsg").forEach(function(e) {
                            return e.classList.add("mm-hidden")
                        })
                    }),
                    o.panel.add)
                    if (o.panel.splash)
                        v(r, ".mm-panel__content").forEach(function(e) {
                            return e.classList.remove("mm-hidden")
                        });
                    else if (!i.closest(".mm-panel_search")) {
                    var u = b(this.node.pnls, ".mm-panel_opened-parent");
                    this.openPanel(u.slice(-1)[0])
                }
                this.trigger("updateListview")
            }),
            addTo: "panels"
        },
        x.options.setSelected = {
            current: !0,
            hover: !(x.options.sectionIndexer = {
                add: !(x.prototype.search = function(i, s) {
                    var e, a = this,
                        o = this.opts.searchfield;
                    this.conf.searchfield,
                        s = (s = s || "" + i.value).toLowerCase().trim();
                    var t = i.mmSearchfield,
                        n = v(i.closest(".mm-searchfield"), ".mm-btn"),
                        r = b(this.node.pnls, ".mm-panel_search")[0],
                        m = t.panels,
                        c = t.noresults,
                        l = t.listitems,
                        d = t.dividers;
                    if (l.forEach(function(e) {
                            e.classList.remove("mm-listitem_nosubitems"),
                                e.classList.remove("mm-listitem_onlysubitems"),
                                e.classList.remove("mm-hidden")
                        }),
                        r && (b(r, ".mm-listview")[0].innerHTML = ""),
                        m.forEach(function(e) {
                            e.scrollTop = 0
                        }),
                        s.length) {
                        d.forEach(function(e) {
                                e.classList.add("mm-hidden")
                            }),
                            l.forEach(function(e) {
                                var t, n = b(e, ".mm-listitem__text")[0],
                                    i = !1;
                                n && -1 < (t = n,
                                        Array.prototype.slice.call(t.childNodes).filter(function(e) {
                                            return 3 == e.nodeType
                                        }).map(function(e) {
                                            return e.textContent
                                        }).join(" ")).toLowerCase().indexOf(s) && (n.matches(".mm-listitem__btn") ? o.showSubPanels && (i = !0) : n.matches("a") ? i = !0 : o.showTextItems && (i = !0)),
                                    i || e.classList.add("mm-hidden")
                            });
                        var f = l.filter(function(e) {
                            return !e.matches(".mm-hidden")
                        }).length;
                        if (o.panel.add) {
                            var p = [];
                            m.forEach(function(e) {
                                    var t = g(v(e, ".mm-listitem"));
                                    if ((t = t.filter(function(e) {
                                            return !e.matches(".mm-hidden")
                                        })).length) {
                                        if (o.panel.dividers) {
                                            var n = h("li.mm-divider"),
                                                i = v(e, ".mm-navbar__title")[0];
                                            i && (n.innerHTML = i.innerHTML,
                                                p.push(n))
                                        }
                                        t.forEach(function(e) {
                                            p.push(e.cloneNode(!0))
                                        })
                                    }
                                }),
                                p.forEach(function(e) {
                                    e.querySelectorAll(".mm-toggle, .mm-check").forEach(function(e) {
                                        e.remove()
                                    })
                                }),
                                (e = b(r, ".mm-listview")[0]).append.apply(e, p),
                                this.openPanel(r)
                        } else
                            o.showSubPanels && m.forEach(function(e) {
                                g(v(e, ".mm-listitem")).forEach(function(e) {
                                    var t = e.mmChild;
                                    t && v(t, ".mm-listitem").forEach(function(e) {
                                        e.classList.remove("mm-hidden")
                                    })
                                })
                            }),
                            m.slice().reverse().forEach(function(e, t) {
                                var n = e.mmParent;
                                n && (g(v(e, ".mm-listitem")).length ? (n.matches(".mm-hidden") && n.classList.remove("mm-hidden"),
                                    n.classList.add("mm-listitem_onlysubitems")) : i.closest(".mm-panel") || ((e.matches(".mm-panel_opened") || e.matches(".mm-panel_opened-parent")) && setTimeout(function() {
                                        a.openPanel(n.closest(".mm-panel"))
                                    }, (t + 1) * (1.5 * a.conf.openingInterval)),
                                    n.classList.add("mm-listitem_nosubitems")))
                            }),
                            m.forEach(function(e) {
                                g(v(e, ".mm-listitem")).forEach(function(s) {
                                    var e = function(e, t) {
                                        for (var n = [], i = s.previousElementSibling; i;)
                                            i.matches(t) && n.push(i),
                                            i = i.previousElementSibling;
                                        return n
                                    }(0, ".mm-divider")[0];
                                    e && e.classList.remove("mm-hidden")
                                })
                            });
                        n.forEach(function(e) {
                                return e.classList.remove("mm-hidden")
                            }),
                            c.forEach(function(e) {
                                v(e, ".mm-panel__noresultsmsg").forEach(function(e) {
                                    return e.classList[f ? "add" : "remove"]("mm-hidden")
                                })
                            }),
                            o.panel.add && (o.panel.splash && v(r, ".mm-panel__content").forEach(function(e) {
                                    return e.classList.add("mm-hidden")
                                }),
                                l.forEach(function(e) {
                                    return e.classList.remove("mm-hidden")
                                }),
                                d.forEach(function(e) {
                                    return e.classList.remove("mm-hidden")
                                }))
                    } else if (l.forEach(function(e) {
                            return e.classList.remove("mm-hidden")
                        }),
                        d.forEach(function(e) {
                            return e.classList.remove("mm-hidden")
                        }),
                        n.forEach(function(e) {
                            return e.classList.add("mm-hidden")
                        }),
                        c.forEach(function(e) {
                            v(e, ".mm-panel__noresultsmsg").forEach(function(e) {
                                return e.classList.add("mm-hidden")
                            })
                        }),
                        o.panel.add)
                        if (o.panel.splash)
                            v(r, ".mm-panel__content").forEach(function(e) {
                                return e.classList.remove("mm-hidden")
                            });
                        else if (!i.closest(".mm-panel_search")) {
                        var u = b(this.node.pnls, ".mm-panel_opened-parent");
                        this.openPanel(u.slice(-1)[0])
                    }
                    this.trigger("updateListview")
                }),
                addTo: "panels"
            }),
            parent: !1
        };
    x.options.sidebar = {
            collapsed: {
                use: !(x.options.setSelected = {
                    current: !0,
                    hover: !(x.options.sectionIndexer = {
                        add: !(x.prototype.search = function(i, s) {
                            var e, a = this,
                                o = this.opts.searchfield;
                            this.conf.searchfield,
                                s = (s = s || "" + i.value).toLowerCase().trim();
                            var t = i.mmSearchfield,
                                n = v(i.closest(".mm-searchfield"), ".mm-btn"),
                                r = b(this.node.pnls, ".mm-panel_search")[0],
                                m = t.panels,
                                c = t.noresults,
                                l = t.listitems,
                                d = t.dividers;
                            if (l.forEach(function(e) {
                                    e.classList.remove("mm-listitem_nosubitems"),
                                        e.classList.remove("mm-listitem_onlysubitems"),
                                        e.classList.remove("mm-hidden")
                                }),
                                r && (b(r, ".mm-listview")[0].innerHTML = ""),
                                m.forEach(function(e) {
                                    e.scrollTop = 0
                                }),
                                s.length) {
                                d.forEach(function(e) {
                                        e.classList.add("mm-hidden")
                                    }),
                                    l.forEach(function(e) {
                                        var t, n = b(e, ".mm-listitem__text")[0],
                                            i = !1;
                                        n && -1 < (t = n,
                                                Array.prototype.slice.call(t.childNodes).filter(function(e) {
                                                    return 3 == e.nodeType
                                                }).map(function(e) {
                                                    return e.textContent
                                                }).join(" ")).toLowerCase().indexOf(s) && (n.matches(".mm-listitem__btn") ? o.showSubPanels && (i = !0) : n.matches("a") ? i = !0 : o.showTextItems && (i = !0)),
                                            i || e.classList.add("mm-hidden")
                                    });
                                var f = l.filter(function(e) {
                                    return !e.matches(".mm-hidden")
                                }).length;
                                if (o.panel.add) {
                                    var p = [];
                                    m.forEach(function(e) {
                                            var t = g(v(e, ".mm-listitem"));
                                            if ((t = t.filter(function(e) {
                                                    return !e.matches(".mm-hidden")
                                                })).length) {
                                                if (o.panel.dividers) {
                                                    var n = h("li.mm-divider"),
                                                        i = v(e, ".mm-navbar__title")[0];
                                                    i && (n.innerHTML = i.innerHTML,
                                                        p.push(n))
                                                }
                                                t.forEach(function(e) {
                                                    p.push(e.cloneNode(!0))
                                                })
                                            }
                                        }),
                                        p.forEach(function(e) {
                                            e.querySelectorAll(".mm-toggle, .mm-check").forEach(function(e) {
                                                e.remove()
                                            })
                                        }),
                                        (e = b(r, ".mm-listview")[0]).append.apply(e, p),
                                        this.openPanel(r)
                                } else
                                    o.showSubPanels && m.forEach(function(e) {
                                        g(v(e, ".mm-listitem")).forEach(function(e) {
                                            var t = e.mmChild;
                                            t && v(t, ".mm-listitem").forEach(function(e) {
                                                e.classList.remove("mm-hidden")
                                            })
                                        })
                                    }),
                                    m.slice().reverse().forEach(function(e, t) {
                                        var n = e.mmParent;
                                        n && (g(v(e, ".mm-listitem")).length ? (n.matches(".mm-hidden") && n.classList.remove("mm-hidden"),
                                            n.classList.add("mm-listitem_onlysubitems")) : i.closest(".mm-panel") || ((e.matches(".mm-panel_opened") || e.matches(".mm-panel_opened-parent")) && setTimeout(function() {
                                                a.openPanel(n.closest(".mm-panel"))
                                            }, (t + 1) * (1.5 * a.conf.openingInterval)),
                                            n.classList.add("mm-listitem_nosubitems")))
                                    }),
                                    m.forEach(function(e) {
                                        g(v(e, ".mm-listitem")).forEach(function(s) {
                                            var e = function(e, t) {
                                                for (var n = [], i = s.previousElementSibling; i;)
                                                    i.matches(t) && n.push(i),
                                                    i = i.previousElementSibling;
                                                return n
                                            }(0, ".mm-divider")[0];
                                            e && e.classList.remove("mm-hidden")
                                        })
                                    });
                                n.forEach(function(e) {
                                        return e.classList.remove("mm-hidden")
                                    }),
                                    c.forEach(function(e) {
                                        v(e, ".mm-panel__noresultsmsg").forEach(function(e) {
                                            return e.classList[f ? "add" : "remove"]("mm-hidden")
                                        })
                                    }),
                                    o.panel.add && (o.panel.splash && v(r, ".mm-panel__content").forEach(function(e) {
                                            return e.classList.add("mm-hidden")
                                        }),
                                        l.forEach(function(e) {
                                            return e.classList.remove("mm-hidden")
                                        }),
                                        d.forEach(function(e) {
                                            return e.classList.remove("mm-hidden")
                                        }))
                            } else if (l.forEach(function(e) {
                                    return e.classList.remove("mm-hidden")
                                }),
                                d.forEach(function(e) {
                                    return e.classList.remove("mm-hidden")
                                }),
                                n.forEach(function(e) {
                                    return e.classList.add("mm-hidden")
                                }),
                                c.forEach(function(e) {
                                    v(e, ".mm-panel__noresultsmsg").forEach(function(e) {
                                        return e.classList.add("mm-hidden")
                                    })
                                }),
                                o.panel.add)
                                if (o.panel.splash)
                                    v(r, ".mm-panel__content").forEach(function(e) {
                                        return e.classList.remove("mm-hidden")
                                    });
                                else if (!i.closest(".mm-panel_search")) {
                                var u = b(this.node.pnls, ".mm-panel_opened-parent");
                                this.openPanel(u.slice(-1)[0])
                            }
                            this.trigger("updateListview")
                        }),
                        addTo: "panels"
                    }),
                    parent: !1
                }),
                blockMenu: !0,
                hideDivider: !1,
                hideNavbar: !0
            },
            expanded: {
                use: !1,
                initial: "open"
            }
        },
        x.configs.classNames.toggles = {
            toggle: "Toggle",
            check: "Check"
        },
        x.addons = {
            offcanvas: function() {
                var e, a = this;
                if (this.opts.offCanvas) {
                    var t = ("object" != typeof(e = this.opts.offCanvas) && (e = {}),
                        e);
                    this.opts.offCanvas = l(t, x.options.offCanvas);
                    var n = this.conf.offCanvas;
                    this._api.push("open", "close", "setPage"),
                        this.vars.opened = !1,
                        this.bind("initMenu:before", function() {
                            n.clone && (a.node.menu = a.node.menu.cloneNode(!0),
                                    a.node.menu.id && (a.node.menu.id = "mm-" + a.node.menu.id),
                                    v(a.node.menu, "[id]").forEach(function(e) {
                                        e.id = "mm-" + e.id
                                    })),
                                a.node.wrpr = document.body,
                                document.querySelector(n.menu.insertSelector)[n.menu.insertMethod](a.node.menu)
                        }),
                        this.bind("initMenu:after", function() {
                            (function() {
                                var t = this;
                                this.trigger("initBlocker:before");
                                var e = this.opts.offCanvas,
                                    n = this.conf.offCanvas;
                                if (e.blockUI) {
                                    if (!x.node.blck) {
                                        var i = h("div.mm-wrapper__blocker.mm-slideout");
                                        i.innerHTML = "<a></a>",
                                            document.querySelector(n.menu.insertSelector).append(i),
                                            x.node.blck = i
                                    }
                                    var s = function(e) {
                                        e.preventDefault(),
                                            e.stopPropagation(),
                                            t.node.wrpr.matches(".mm-wrapper_modal") || t.close()
                                    };
                                    x.node.blck.addEventListener("mousedown", s),
                                        x.node.blck.addEventListener("touchstart", s),
                                        x.node.blck.addEventListener("touchmove", s),
                                        this.trigger("initBlocker:after")
                                }
                            }).call(a),
                                a.setPage(x.node.page),
                                function() {
                                    var t = this;
                                    M(document.body, "keydown.tabguard"),
                                        S(document.body, "keydown.tabguard", function(e) {
                                            9 == e.keyCode && t.node.wrpr.matches(".mm-wrapper_opened") && e.preventDefault()
                                        })
                                }
                                .call(a),
                                a.node.menu.classList.add("mm-menu_offcanvas");
                            var e = window.location.hash;
                            if (e) {
                                var t = o(a.node.menu.id);
                                t && t == e.slice(1) && setTimeout(function() {
                                    a.open()
                                }, 1e3)
                            }
                        }),
                        this.bind("setPage:after", function(t) {
                            x.node.blck && b(x.node.blck, "a").forEach(function(e) {
                                e.setAttribute("href", "#" + t.id)
                            })
                        }),
                        this.bind("open:start:sr-aria", function() {
                            x.sr_aria(a.node.menu, "hidden", !1)
                        }),
                        this.bind("close:finish:sr-aria", function() {
                            x.sr_aria(a.node.menu, "hidden", !0)
                        }),
                        this.bind("initMenu:after:sr-aria", function() {
                            x.sr_aria(a.node.menu, "hidden", !0)
                        }),
                        this.bind("initBlocker:after:sr-text", function() {
                            b(x.node.blck, "a").forEach(function(e) {
                                e.innerHTML = x.sr_text(a.i18n(a.conf.screenReader.text.closeMenu))
                            })
                        }),
                        this.clck.push(function(e, t) {
                            var n = o(a.node.menu.id);
                            if (n && e.matches('[href="#' + n + '"]')) {
                                if (t.inMenu)
                                    return a.open(), !0;
                                var i = e.closest(".mm-menu");
                                if (i) {
                                    var s = i.mmApi;
                                    if (s && s.close)
                                        return s.close(),
                                            c(i, function() {
                                                a.open()
                                            }, a.conf.transitionDuration), !0
                                }
                                return a.open(), !0
                            }
                            if ((n = x.node.page.id) && e.matches('[href="#' + n + '"]'))
                                return a.close(), !0
                        })
                }
            },
            screenReader: function() {
                var e, s = this,
                    t = ("boolean" == typeof(e = this.opts.screenReader) && (e = {
                            aria: e,
                            text: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                this.opts.screenReader = l(t, x.options.screenReader);
                var a = this.conf.screenReader;
                t.aria && (this.bind("initAddons:after", function() {
                            s.bind("initMenu:after", function() {
                                    this.trigger("initMenu:after:sr-aria", [].slice.call(arguments))
                                }),
                                s.bind("initNavbar:after", function() {
                                    this.trigger("initNavbar:after:sr-aria", [].slice.call(arguments))
                                }),
                                s.bind("openPanel:start", function() {
                                    this.trigger("openPanel:start:sr-aria", [].slice.call(arguments))
                                }),
                                s.bind("close:start", function() {
                                    this.trigger("close:start:sr-aria", [].slice.call(arguments))
                                }),
                                s.bind("close:finish", function() {
                                    this.trigger("close:finish:sr-aria", [].slice.call(arguments))
                                }),
                                s.bind("open:start", function() {
                                    this.trigger("open:start:sr-aria", [].slice.call(arguments))
                                }),
                                s.bind("initOpened:after", function() {
                                    this.trigger("initOpened:after:sr-aria", [].slice.call(arguments))
                                })
                        }),
                        this.bind("updateListview", function() {
                            s.node.pnls.querySelectorAll(".mm-listitem").forEach(function(e) {
                                x.sr_aria(e, "hidden", e.matches(".mm-hidden"))
                            })
                        }),
                        this.bind("openPanel:start", function(t) {
                            var e = v(s.node.pnls, ".mm-panel").filter(function(e) {
                                    return e !== t
                                }).filter(function(e) {
                                    return !e.parentElement.matches(".mm-panel")
                                }),
                                n = [t];
                            v(t, ".mm-listitem_vertical .mm-listitem_opened").forEach(function(e) {
                                    n.push.apply(n, b(e, ".mm-panel"))
                                }),
                                e.forEach(function(e) {
                                    x.sr_aria(e, "hidden", !0)
                                }),
                                n.forEach(function(e) {
                                    x.sr_aria(e, "hidden", !1)
                                })
                        }),
                        this.bind("closePanel", function(e) {
                            x.sr_aria(e, "hidden", !0)
                        }),
                        this.bind("initPanel:after", function(e) {
                            v(e, ".mm-btn").forEach(function(e) {
                                x.sr_aria(e, "haspopup", !0);
                                var t = e.getAttribute("href");
                                t && x.sr_aria(e, "owns", t.replace("#", ""))
                            })
                        }),
                        this.bind("initNavbar:after", function(e) {
                            var t = b(e, ".mm-navbar")[0],
                                n = t.matches(".mm-hidden");
                            x.sr_aria(t, "hidden", n)
                        }),
                        t.text && "parent" == this.opts.navbar.titleLink && this.bind("initNavbar:after", function(e) {
                            var t = b(e, ".mm-navbar")[0],
                                n = !!t.querySelector(".mm-btn_prev");
                            x.sr_aria(v(t, ".mm-navbar__title")[0], "hidden", n)
                        })),
                    t.text && (this.bind("initAddons:after", function() {
                            s.bind("setPage:after", function() {
                                    this.trigger("setPage:after:sr-text", [].slice.call(arguments))
                                }),
                                s.bind("initBlocker:after", function() {
                                    this.trigger("initBlocker:after:sr-text", [].slice.call(arguments))
                                })
                        }),
                        this.bind("initNavbar:after", function(e) {
                            var t = b(e, ".mm-navbar")[0];
                            if (t) {
                                var n = b(t, ".mm-btn_prev")[0];
                                n && (n.innerHTML = x.sr_text(s.i18n(a.text.closeSubmenu)))
                            }
                        }),
                        this.bind("initListview:after", function(e) {
                            var t = e.closest(".mm-panel").mmParent;
                            if (t) {
                                var n = b(t, ".mm-btn_next")[0];
                                if (n) {
                                    var i = s.i18n(a.text[n.parentElement.matches(".mm-listitem_vertical") ? "toggleSubmenu" : "openSubmenu"]);
                                    n.innerHTML += x.sr_text(i)
                                }
                            }
                        }))
            },
            scrollBugFix: function() {
                var e, n = this;
                if (A && this.opts.offCanvas && this.opts.offCanvas.blockUI) {
                    var t = ("boolean" == typeof(e = this.opts.scrollBugFix) && (e = {
                            fix: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                    if (this.opts.scrollBugFix = l(t, x.options.scrollBugFix),
                        t.fix) {
                        var i, s, a = (i = this.node.menu,
                            s = "",
                            i.addEventListener("touchmove", function(e) {
                                0 < e.movementY ? s = "down" : e.movementY < 0 && (s = "up"),
                                    s = null
                            }), {
                                get: function() {
                                    return s
                                }
                            });
                        this.node.menu.addEventListener("scroll", o, {
                                passive: !1
                            }),
                            this.node.menu.addEventListener("touchmove", function(e) {
                                var t = e.target.closest(".mm-panel");
                                t ? t.scrollHeight === t.offsetHeight ? o(e) : (0 == t.scrollTop && "down" == a.get() || t.scrollHeight == t.scrollTop + t.offsetHeight && "up" == a.get()) && o(e) : o(e)
                            }, {
                                passive: !1
                            }),
                            this.bind("open:start", function() {
                                b(n.node.pnls, ".mm-panel_opened")[0].scrollTop = 0
                            }),
                            window.addEventListener("orientationchange", function(e) {
                                var t = b(n.node.pnls, ".mm-panel_opened")[0];
                                t.scrollTop = 0,
                                    t.style["-webkit-overflow-scrolling"] = "auto",
                                    t.style["-webkit-overflow-scrolling"] = "touch"
                            })
                    }
                }

                function o(e) {
                    e.preventDefault(),
                        e.stopPropagation()
                }
            },
            autoHeight: function() {
                var e, s = this,
                    a = ("boolean" == typeof(e = this.opts.autoHeight) && e && (e = {
                            height: "auto"
                        }),
                        "string" == typeof e && (e = {
                            height: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                if (this.opts.autoHeight = l(a, x.options.autoHeight),
                    "auto" == a.height || "highest" == a.height) {
                    var o, t = (o = function(e) {
                            return e.parentElement.matches(".mm-listitem_vertical") && (e = u(e, ".mm-panel").filter(function(e) {
                                    return !e.parentElement.matches(".mm-listitem_vertical")
                                })[0]),
                                e
                        },
                        function() {
                            if (!s.opts.offCanvas || s.vars.opened) {
                                var t, e, n = 0,
                                    i = s.node.menu.offsetHeight - s.node.pnls.offsetHeight;
                                s.node.menu.classList.add("mm-menu_autoheight-measuring"),
                                    "auto" == a.height ? ((e = b(s.node.pnls, ".mm-panel_opened")[0]) && (e = o(e)),
                                        n = (e = e || b(s.node.pnls, ".mm-panel")[0]).scrollHeight) : "highest" == a.height && (t = 0,
                                        b(s.node.pnls, ".mm-panel").forEach(function(e) {
                                            e = o(e),
                                                t = Math.max(t, e.scrollHeight)
                                        }),
                                        n = t),
                                    s.node.menu.style.height = n + i + "px",
                                    s.node.menu.classList.remove("mm-menu_autoheight-measuring")
                            }
                        }
                    );
                    this.bind("initMenu:after", function() {
                            s.node.menu.classList.add("mm-menu_autoheight")
                        }),
                        this.opts.offCanvas && this.bind("open:start", t),
                        "highest" == a.height && this.bind("initPanels:after", t),
                        "auto" == a.height && (this.bind("updateListview", t),
                            this.bind("openPanel:start", t))
                }
            },
            backButton: function() {
                var e, n = this;
                if (this.opts.offCanvas) {
                    var t = ("boolean" == typeof(e = this.opts.backButton) && (e = {
                            close: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                    this.opts.backButton = l(t, x.options.backButton);
                    var i = "#" + this.node.menu.id;
                    if (t.close) {
                        var s = [],
                            a = function() {
                                s = [i],
                                    b(n.node.pnls, ".mm-panel_opened, .mm-panel_opened-parent").forEach(function(e) {
                                        s.push("#" + e.id)
                                    })
                            };
                        this.bind("open:finish", function() {
                                history.pushState(null, document.title, i)
                            }),
                            this.bind("open:finish", a),
                            this.bind("openPanel:finish", a),
                            this.bind("close:finish", function() {
                                s = [],
                                    history.back(),
                                    history.pushState(null, document.title, location.pathname + location.search)
                            }),
                            window.addEventListener("popstate", function(e) {
                                if (n.vars.opened && s.length) {
                                    var t = (s = s.slice(0, -1))[s.length - 1];
                                    t == i ? n.close() : (n.openPanel(n.node.menu.querySelector(t)),
                                        history.pushState(null, document.title, i))
                                }
                            })
                    }
                    t.open && window.addEventListener("popstate", function(e) {
                        n.vars.opened || location.hash != i || n.open()
                    })
                }
            },
            columns: function() {
                var e, s = this,
                    i = ("boolean" == typeof(e = this.opts.columns) && (e = {
                            add: e
                        }),
                        "number" == typeof e && (e = {
                            add: !0,
                            visible: e
                        }),
                        "object" != typeof e && (e = {}),
                        "number" == typeof e.visible && (e.visible = {
                            min: e.visible,
                            max: e.visible
                        }),
                        e);
                if (this.opts.columns = l(i, x.options.columns),
                    i.add) {
                    i.visible.min = Math.max(1, Math.min(6, i.visible.min)),
                        i.visible.max = Math.max(i.visible.min, Math.min(6, i.visible.max));
                    for (var a = [], o = [], r = ["mm-panel_opened", "mm-panel_opened-parent", "mm-panel_highest"], t = 0; t <= i.visible.max; t++)
                        a.push("mm-menu_columns-" + t),
                        o.push("mm-panel_columns-" + t);
                    r.push.apply(r, o),
                        this.bind("openPanel:before", function(t) {
                            var e;
                            if (t && (e = t.mmParent),
                                e = e && e.closest(".mm-panel")) {
                                var n = e.className;
                                if (n.length && (n = n.split("mm-panel_columns-")[1]))
                                    for (var i = parseInt(n.split(" ")[0], 10) + 1; 0 < i;) {
                                        if (!(t = b(s.node.pnls, ".mm-panel_columns-" + i)[0])) {
                                            i = -1;
                                            break
                                        }
                                        i++,
                                        t.classList.add("mm-hidden"),
                                            r.forEach(function(e) {
                                                t.classList.remove(e)
                                            })
                                    }
                            }
                        }),
                        this.bind("openPanel:start", function(e) {
                            var t = b(s.node.pnls, ".mm-panel_opened-parent").length;
                            e.matches(".mm-panel_opened-parent") || t++,
                                t = Math.min(i.visible.max, Math.max(i.visible.min, t)),
                                a.forEach(function(e) {
                                    s.node.menu.classList.remove(e)
                                }),
                                s.node.menu.classList.add("mm-menu_columns-" + t);
                            var n = [];
                            b(s.node.pnls, ".mm-panel").forEach(function(t) {
                                    o.forEach(function(e) {
                                            t.classList.remove(e)
                                        }),
                                        t.matches(".mm-panel_opened-parent") && n.push(t)
                                }),
                                n.push(e),
                                n.slice(-i.visible.max).forEach(function(e, t) {
                                    e.classList.add("mm-panel_columns-" + t)
                                })
                        })
                }
            },
            counters: function() {
                var e, n = this,
                    i = ("boolean" == typeof(e = this.opts.counters) && (e = {
                            add: e,
                            addTo: "panels",
                            count: e
                        }),
                        "object" != typeof e && (e = {}),
                        "panels" == e.addTo && (e.addTo = ".mm-listview"),
                        e);
                if (this.opts.counters = l(i, x.options.counters),
                    this.bind("initListview:after", function(e) {
                        var t = n.conf.classNames.counters.counter;
                        v(e, "." + t).forEach(function(e) {
                            y(e, t, "mm-counter")
                        })
                    }),
                    i.add && this.bind("initListview:after", function(e) {
                        if (e.matches(i.addTo)) {
                            var t = e.closest(".mm-panel").mmParent;
                            if (t && !v(t, ".mm-counter").length) {
                                var n = b(t, ".mm-btn")[0];
                                n && n.prepend(h("span.mm-counter"))
                            }
                        }
                    }),
                    i.count) {
                    var t = function(e) {
                        (e ? [e.closest(".mm-panel")] : b(n.node.pnls, ".mm-panel")).forEach(function(e) {
                            var t = e.mmParent;
                            if (t) {
                                var n = v(t, ".mm-counter")[0];
                                if (n) {
                                    var i = [];
                                    b(e, ".mm-listview").forEach(function(e) {
                                            i.push.apply(i, b(e))
                                        }),
                                        n.innerHTML = g(i).length.toString()
                                }
                            }
                        })
                    };
                    this.bind("initListview:after", t),
                        this.bind("updateListview", t)
                }
            },
            dividers: function() {
                var e, t = this,
                    n = ("boolean" == typeof(e = this.opts.dividers) && (e = {
                            add: e
                        }),
                        "object" != typeof e && (e = {}),
                        "panels" == e.addTo && (e.addTo = ".mm-listview"),
                        e);
                this.opts.dividers = l(n, x.options.dividers),
                    this.bind("initListview:after", function(e) {
                        b(e).forEach(function(e) {
                            y(e, t.conf.classNames.divider, "mm-divider"),
                                e.matches(".mm-divider") && e.classList.remove("mm-listitem")
                        })
                    }),
                    n.add && this.bind("initListview:after", function(i) {
                        if (i.matches(n.addTo)) {
                            v(i, ".mm-divider").forEach(function(e) {
                                e.remove()
                            });
                            var s = "";
                            g(b(i)).forEach(function(e) {
                                var t = b(e, ".mm-listitem__text")[0].textContent.trim().toLowerCase()[0];
                                if (t.length && t != s) {
                                    s = t;
                                    var n = h("li.mm-divider");
                                    n.textContent = t,
                                        i.insertBefore(n, e)
                                }
                            })
                        }
                    })
            },
            drag: function() {
                var e, t = this;
                if (this.opts.offCanvas) {
                    var n = ("boolean" == typeof(e = this.opts.drag) && (e = {
                            open: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                    this.opts.drag = l(n, x.options.drag),
                        n.open && this.bind("setPage:after", function(e) {
                            (function(e) {
                                var i = this,
                                    s = {},
                                    a = !1,
                                    t = function() {
                                        var e = Object.keys(i.opts.extensions);
                                        e.length ? (E(e.join(", "), function() {}, function() {
                                                s = N(s, [], i.node.menu)
                                            }),
                                            e.forEach(function(e) {
                                                E(e, function() {
                                                    s = N(s, i.opts.extensions[e], i.node.menu)
                                                }, function() {})
                                            })) : s = N(s, [], i.node.menu)
                                    };
                                B && (M(B, "dragStart"),
                                        M(B, "dragMove"),
                                        M(B, "dragEnd")),
                                    q = new D(B = e),
                                    t(),
                                    t = function() {},
                                    B && (S(B, "dragStart", function(e) {
                                            e.detail.direction == s.direction && (a = !0,
                                                i.node.wrpr.classList.add("mm-wrapper_dragging"),
                                                i._openSetup(),
                                                i.trigger("open:start"),
                                                z = i.node.menu["x" == s.axis ? "clientWidth" : "clientHeight"])
                                        }),
                                        S(B, "dragMove", function(e) {
                                            if (e.detail.axis == s.axis && a) {
                                                var t = e.detail["distance" + s.axis.toUpperCase()];
                                                switch (s.position) {
                                                    case "right":
                                                    case "bottom":
                                                        t = Math.min(Math.max(t, -z), 0);
                                                        break;
                                                    default:
                                                        t = Math.max(Math.min(t, z), 0)
                                                }
                                                if ("front" == s.zposition)
                                                    switch (s.position) {
                                                        case "right":
                                                        case "bottom":
                                                            t += z;
                                                            break;
                                                        default:
                                                            t -= z
                                                    }
                                                s.slideOutNodes.forEach(function(e) {
                                                    e.style.transform = "translate" + s.axis.toUpperCase() + "(" + t + "px)"
                                                })
                                            }
                                        }),
                                        S(B, "dragEnd", function(e) {
                                            if (e.detail.axis == s.axis && a) {
                                                a = !1,
                                                    i.node.wrpr.classList.remove("mm-wrapper_dragging"),
                                                    s.slideOutNodes.forEach(function(e) {
                                                        e.style.transform = ""
                                                    });
                                                var t = Math.abs(e.detail["distance" + s.axis.toUpperCase()]) >= .75 * z;
                                                if (!t) {
                                                    var n = e.detail["movement" + s.axis.toUpperCase()];
                                                    switch (s.position) {
                                                        case "right":
                                                        case "bottom":
                                                            t = n <= 0;
                                                            break;
                                                        default:
                                                            t = 0 <= n
                                                    }
                                                }
                                                t ? i._openStart() : i.close()
                                            }
                                        }))
                            }).call(t, n.node || e)
                        })
                }
            },
            dropdown: function() {
                var e, n = this;
                if (this.opts.offCanvas) {
                    var g = ("boolean" == typeof(e = this.opts.dropdown) && e && (e = {
                            drop: e
                        }),
                        "object" != typeof e && (e = {}),
                        "string" == typeof e.position && (e.position = {
                            of: e.position
                        }),
                        e);
                    this.opts.dropdown = l(g, x.options.dropdown);
                    var _ = this.conf.dropdown;
                    if (g.drop) {
                        var y;
                        this.bind("initMenu:after", function() {
                                if (n.node.menu.classList.add("mm-menu_dropdown"),
                                    "string" != typeof g.position.of) {
                                    var e = o(n.node.menu.id);
                                    e && (g.position.of = '[href="#' + e + '"]')
                                }
                                if ("string" == typeof g.position.of) {
                                    y = v(document.body, g.position.of)[0];
                                    var t = g.event.split(" ");
                                    1 == t.length && (t[1] = t[0]),
                                        "hover" == t[0] && y.addEventListener("mouseenter", function() {
                                            n.open()
                                        }, {
                                            passive: !0
                                        }),
                                        "hover" == t[1] && n.node.menu.addEventListener("mouseleave", function() {
                                            n.close()
                                        }, {
                                            passive: !0
                                        })
                                }
                            }),
                            this.bind("open:start", function() {
                                n.node.menu.mmStyle = n.node.menu.getAttribute("style"),
                                    n.node.wrpr.classList.add("mm-wrapper_dropdown")
                            }),
                            this.bind("close:finish", function() {
                                n.node.menu.setAttribute("style", n.node.menu.mmStyle),
                                    n.node.wrpr.classList.remove("mm-wrapper_dropdown")
                            });
                        var i = function(e, t) {
                            var n, i, s, a = t[0],
                                o = t[1],
                                r = "x" == e ? "offsetWidth" : "offsetHeight",
                                m = "x" == e ? "left" : "top",
                                c = "x" == e ? "right" : "bottom",
                                l = "x" == e ? "width" : "height",
                                d = "x" == e ? "innerWidth" : "innerHeight",
                                f = "x" == e ? "maxWidth" : "maxHeight",
                                p = null,
                                u = (n = m,
                                    y.getBoundingClientRect()[n] + document.body["left" == n ? "scrollLeft" : "scrollTop"]),
                                h = u + y[r],
                                v = window[d],
                                b = _.offset.button[e] + _.offset.viewport[e];
                            if (g.position[e])
                                switch (g.position[e]) {
                                    case "left":
                                    case "bottom":
                                        p = "after";
                                        break;
                                    case "right":
                                    case "top":
                                        p = "before"
                                }
                            return null === p && (p = u + (h - u) / 2 < v / 2 ? "after" : "before"),
                                "after" == p ? (s = v - ((i = "x" == e ? u : h) + b),
                                    a[m] = i + _.offset.button[e] + "px",
                                    a[c] = "auto",
                                    g.tip && o.push("mm-menu_tip-" + ("x" == e ? "left" : "top"))) : (s = (i = "x" == e ? h : u) - b,
                                    a[c] = "calc( 100% - " + (i - _.offset.button[e]) + "px )",
                                    a[m] = "auto",
                                    g.tip && o.push("mm-menu_tip-" + ("x" == e ? "right" : "bottom"))),
                                g.fitViewport && (a[f] = Math.min(_[l].max, s) + "px"), [a, o]
                        };
                        this.bind("open:start", t),
                            window.addEventListener("resize", function(e) {
                                t.call(n)
                            }, {
                                passive: !0
                            }),
                            this.opts.offCanvas.blockUI || window.addEventListener("scroll", function(e) {
                                t.call(n)
                            }, {
                                passive: !0
                            })
                    }
                }

                function t() {
                    var t = this;
                    if (this.vars.opened) {
                        this.node.menu.setAttribute("style", this.node.menu.mmStyle);
                        var e = [{},
                            []
                        ];
                        for (var n in e = i.call(this, "y", e),
                                (e = i.call(this, "x", e))[0])
                            this.node.menu.style[n] = e[0][n];
                        g.tip && (["mm-menu_tip-left", "mm-menu_tip-right", "mm-menu_tip-top", "mm-menu_tip-bottom"].forEach(function(e) {
                                t.node.menu.classList.remove(e)
                            }),
                            e[1].forEach(function(e) {
                                t.node.menu.classList.add(e)
                            }))
                    }
                }
            },
            fixedElements: function() {
                var t = this;
                if (this.opts.offCanvas) {
                    var n, i, s = this.conf.fixedElements;
                    this.bind("setPage:after", function(e) {
                        n = t.conf.classNames.fixedElements.fixed,
                            i = v(document, s.insertSelector)[0],
                            v(e, "." + n).forEach(function(e) {
                                y(e, n, "mm-slideout"),
                                    i[s.insertMethod](e)
                            })
                    })
                }
            },
            iconbar: function() {
                var o, e, i = this,
                    r = ("array" == m(e = this.opts.iconbar) && (e = {
                            use: !0,
                            top: e
                        }),
                        "object" != m(e) && (e = {}),
                        void 0 === e.use && (e.use = !0),
                        "boolean" == typeof e.use && e.use && (e.use = !0),
                        e);
                if (this.opts.iconbar = l(r, x.options.iconbar),
                    r.use && (["top", "bottom"].forEach(function(e, t) {
                            var n = r[e];
                            "array" != m(n) && (n = [n]);
                            for (var i = h("div.mm-iconbar__" + e), s = 0, a = n.length; s < a; s++)
                                "string" == typeof n[s] ? i.innerHTML += n[s] : i.append(n[s]);
                            i.children.length && (o = o || h("div.mm-iconbar")).append(i)
                        }),
                        o)) {
                    this.bind("initMenu:after", function() {
                        i.node.menu.prepend(o)
                    });
                    var t = "mm-menu_iconbar-" + r.position,
                        n = function() {
                            i.node.menu.classList.add(t),
                                x.sr_aria(o, "hidden", !1)
                        };
                    if ("boolean" == typeof r.use ? this.bind("initMenu:after", n) : E(r.use, n, function() {
                            i.node.menu.classList.remove(t),
                                x.sr_aria(o, "hidden", !0)
                        }),
                        "tabs" == r.type) {
                        o.classList.add("mm-iconbar_tabs"),
                            o.addEventListener("click", function(e) {
                                var t = e.target;
                                if (t.matches("a"))
                                    if (t.matches(".mm-iconbar__tab_selected"))
                                        e.stopImmediatePropagation();
                                    else
                                        try {
                                            var n = i.node.menu.querySelector(t.getAttribute("href"))[0];
                                            n && n.matches(".mm-panel") && (e.preventDefault(),
                                                e.stopImmediatePropagation(),
                                                i.openPanel(n, !1))
                                        } catch (e) {}
                            });
                        var s = function(e) {
                            v(o, "a").forEach(function(e) {
                                e.classList.remove("mm-iconbar__tab_selected")
                            });
                            var t = v(o, '[href="#' + e.id + '"]')[0];
                            if (t)
                                t.classList.add("mm-iconbar__tab_selected");
                            else {
                                var n = e.mmParent;
                                n && s(n.closest(".mm-panel"))
                            }
                        };
                        this.bind("openPanel:start", s)
                    }
                }
            },
            iconPanels: function() {
                var e, i = this,
                    s = ("boolean" == typeof(e = this.opts.iconPanels) && (e = {
                            add: e
                        }),
                        "number" != typeof e && "string" != typeof e || (e = {
                            add: !0,
                            visible: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                this.opts.iconPanels = l(s, x.options.iconPanels);
                var a = !1;
                if ("first" == s.visible && (a = !0,
                        s.visible = 1),
                    s.visible = Math.min(3, Math.max(1, s.visible)),
                    s.visible++,
                    s.add) {
                    this.bind("initMenu:after", function() {
                        var e = ["mm-menu_iconpanel"];
                        s.hideNavbar && e.push("mm-menu_hidenavbar"),
                            s.hideDivider && e.push("mm-menu_hidedivider"),
                            e.forEach(function(e) {
                                i.node.menu.classList.add(e)
                            })
                    });
                    var o = [];
                    if (!a)
                        for (var t = 0; t <= s.visible; t++)
                            o.push("mm-panel_iconpanel-" + t);
                    this.bind("openPanel:start", function(t) {
                            var e = b(i.node.pnls, ".mm-panel");
                            if (!(t = t || e[0]).parentElement.matches(".mm-listitem_vertical"))
                                if (a)
                                    e.forEach(function(e, t) {
                                        e.classList[0 == t ? "add" : "remove"]("mm-panel_iconpanel-first")
                                    });
                                else {
                                    e.forEach(function(t) {
                                            o.forEach(function(e) {
                                                t.classList.remove(e)
                                            })
                                        }),
                                        e = e.filter(function(e) {
                                            return e.matches(".mm-panel_opened-parent")
                                        });
                                    var n = !1;
                                    e.forEach(function(e) {
                                            t === e && (n = !0)
                                        }),
                                        n || e.push(t),
                                        e.forEach(function(e) {
                                            e.classList.remove("mm-hidden")
                                        }),
                                        (e = e.slice(-s.visible)).forEach(function(e, t) {
                                            e.classList.add("mm-panel_iconpanel-" + t)
                                        })
                                }
                        }),
                        this.bind("initPanel:after", function(e) {
                            if (s.blockPanel && !e.parentElement.matches(".mm-listitem_vertical") && !b(e, ".mm-panel__blocker")[0]) {
                                var t = h("a.mm-panel__blocker");
                                t.setAttribute("href", "#" + e.closest(".mm-panel").id),
                                    e.prepend(t)
                            }
                        })
                }
            },
            keyboardNavigation: function() {
                var e, s = this;
                if (!A) {
                    var a = ("boolean" != typeof(e = this.opts.keyboardNavigation) && "string" != typeof e || (e = {
                            enable: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                    if (this.opts.keyboardNavigation = l(a, x.options.keyboardNavigation),
                        a.enable) {
                        var t = h("button.mm-tabstart.mm-sronly"),
                            n = h("button.mm-tabend.mm-sronly"),
                            i = h("button.mm-tabend.mm-sronly");
                        this.bind("initMenu:after", function() {
                                a.enhance && s.node.menu.classList.add("mm-menu_keyboardfocus"),
                                    function(a) {
                                        var i = this;
                                        M(document.body, "keydown.tabguard"),
                                            M(document.body, "focusin.tabguard"),
                                            S(document.body, "focusin.tabguard", function(e) {
                                                if (i.node.wrpr.matches(".mm-wrapper_opened")) {
                                                    var t = e.target;
                                                    if (t.matches(".mm-tabend")) {
                                                        var n = void 0;
                                                        t.parentElement.matches(".mm-menu") && x.node.blck && (n = x.node.blck),
                                                            t.parentElement.matches(".mm-wrapper__blocker") && (n = v(document.body, ".mm-menu_offcanvas.mm-menu_opened")[0]),
                                                            (n = n || t.parentElement) && b(n, ".mm-tabstart")[0].focus()
                                                    }
                                                }
                                            }),
                                            M(document.body, "keydown.navigate"),
                                            S(document.body, "keydown.navigate", function(e) {
                                                var t = e.target,
                                                    n = t.closest(".mm-menu");
                                                if (n) {
                                                    if (n.mmApi, !t.matches("input, textarea"))
                                                        switch (e.keyCode) {
                                                            case 13:
                                                                (t.matches(".mm-toggle") || t.matches(".mm-check")) && t.dispatchEvent(new Event("click"));
                                                                break;
                                                            case 32:
                                                            case 37:
                                                            case 38:
                                                            case 39:
                                                            case 40:
                                                                e.preventDefault()
                                                        }
                                                    if (a)
                                                        if (t.matches("input"))
                                                            switch (e.keyCode) {
                                                                case 27:
                                                                    t.value = ""
                                                            }
                                                        else {
                                                            var i = n.mmApi;
                                                            switch (e.keyCode) {
                                                                case 8:
                                                                    var s = v(n, ".mm-panel_opened")[0].mmParent;
                                                                    s && i.openPanel(s.closest(".mm-panel"));
                                                                    break;
                                                                case 27:
                                                                    n.matches(".mm-menu_offcanvas") && i.close()
                                                            }
                                                        }
                                                }
                                            })
                                    }
                                    .call(s, a.enhance)
                            }),
                            this.bind("initOpened:before", function() {
                                s.node.menu.prepend(t),
                                    s.node.menu.append(n),
                                    b(s.node.menu, ".mm-navbars-top, .mm-navbars-bottom").forEach(function(e) {
                                        e.querySelectorAll(".mm-navbar__title").forEach(function(e) {
                                            e.setAttribute("tabindex", "-1")
                                        })
                                    })
                            }),
                            this.bind("initBlocker:after", function() {
                                x.node.blck.append(i),
                                    b(x.node.blck, "a")[0].classList.add("mm-tabstart")
                            });
                        var o = "input, select, textarea, button, label, a[href]",
                            r = function(e) {
                                e = e || b(s.node.pnls, ".mm-panel_opened")[0];
                                var t = null,
                                    n = document.activeElement.closest(".mm-navbar");
                                if (!n || n.closest(".mm-menu") != s.node.menu) {
                                    if ("default" == a.enable && ((t = v(e, ".mm-listview a[href]:not(.mm-hidden)")[0]) || (t = v(e, o + ":not(.mm-hidden)")[0]), !t)) {
                                        var i = [];
                                        b(s.node.menu, ".mm-navbars_top, .mm-navbars_bottom").forEach(function(e) {
                                                i.push.apply(i, v(e, o + ":not(.mm-hidden)"))
                                            }),
                                            t = i[0]
                                    }
                                    (t = t || b(s.node.menu, ".mm-tabstart")[0]) && t.focus()
                                }
                            };
                        this.bind("open:finish", r),
                            this.bind("openPanel:finish", r),
                            this.bind("initOpened:after:sr-aria", function() {
                                [s.node.menu, x.node.blck].forEach(function(e) {
                                    b(e, ".mm-tabstart, .mm-tabend").forEach(function(e) {
                                        x.sr_aria(e, "hidden", !0),
                                            x.sr_role(e, "presentation")
                                    })
                                })
                            })
                    }
                }
            },
            lazySubmenus: function() {
                var e, i = this,
                    t = ("boolean" == typeof(e = this.opts.lazySubmenus) && (e = {
                            load: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                this.opts.lazySubmenus = l(t, x.options.lazySubmenus),
                    t.load && (this.bind("initMenu:after", function() {
                            var t = [];
                            v(i.node.pnls, "li").forEach(function(e) {
                                    t.push.apply(t, b(e, i.conf.panelNodetype.join(", ")))
                                }),
                                t.filter(function(e) {
                                    return !e.matches(".mm-listview_inset")
                                }).filter(function(e) {
                                    return !e.matches(".mm-nolistview")
                                }).filter(function(e) {
                                    return !e.matches(".mm-nopanel")
                                }).forEach(function(t) {
                                    ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach(function(e) {
                                        t.classList.add(e)
                                    })
                                })
                        }),
                        this.bind("initPanels:before", function() {
                            b(i.node.pnls, i.conf.panelNodetype.join(", ")).forEach(function(e) {
                                var t = ".mm-panel_lazysubmenu",
                                    n = v(e, t);
                                e.matches(t) && n.unshift(e),
                                    n.filter(function(e) {
                                        return !e.matches(".mm-panel_lazysubmenu .mm-panel_lazysubmenu")
                                    }).forEach(function(t) {
                                        ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach(function(e) {
                                            t.classList.remove(e)
                                        })
                                    })
                            })
                        }),
                        this.bind("initOpened:before", function() {
                            var t = [];
                            v(i.node.pnls, "." + i.conf.classNames.selected).forEach(function(e) {
                                    t.push.apply(t, u(e, ".mm-panel_lazysubmenu"))
                                }),
                                t.length && (t.forEach(function(t) {
                                        ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach(function(e) {
                                            t.classList.remove(e)
                                        })
                                    }),
                                    i.initPanel(t[t.length - 1]))
                        }),
                        this.bind("openPanel:before", function(e) {
                            var t = ".mm-panel_lazysubmenu",
                                n = v(e, t);
                            e.matches(t) && n.unshift(e),
                                (n = n.filter(function(e) {
                                    return !e.matches(".mm-panel_lazysubmenu .mm-panel_lazysubmenu")
                                })).forEach(function(e) {
                                    i.initPanel(e)
                                })
                        }))
            },
            navbars: U,
            pageScroll: function() {
                var e, s = this,
                    t = ("boolean" == typeof(e = this.opts.pageScroll) && (e = {
                            scroll: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                this.opts.pageScroll = l(t, x.options.pageScroll);
                var i, a = this.conf.pageScroll;

                function o() {
                    i && window.scrollTo({
                            top: i.getBoundingClientRect().top + document.scrollingElement.scrollTop - a.scrollOffset,
                            behavior: "smooth"
                        }),
                        i = null
                }

                function r(e) {
                    try {
                        return "#" != e && "#" == e.slice(0, 1) ? x.node.page.querySelector(e) : null
                    } catch (e) {
                        return null
                    }
                }
                if (t.scroll && this.bind("close:finish", function() {
                        o()
                    }),
                    this.opts.offCanvas && t.scroll && this.clck.push(function(e, t) {
                        if (i = null,
                            t.inMenu) {
                            var n = e.getAttribute("href");
                            if (i = r(n))
                                return s.node.menu.matches(".mm-menu_sidebar-expanded") && s.node.wrpr.matches(".mm-wrapper_sidebar-expanded") ? void o() : {
                                    close: !0
                                }
                        }
                    }),
                    t.update) {
                    var m = [];
                    this.bind("initListview:after", function(e) {
                        _(b(e, ".mm-listitem")).forEach(function(e) {
                            var t = r(e.getAttribute("href"));
                            t && m.unshift(t)
                        })
                    });
                    var c = -1;
                    window.addEventListener("scroll", function(e) {
                        for (var t = window.scrollY, n = 0; n < m.length; n++)
                            if (m[n].offsetTop < t + a.updateOffset) {
                                if (c !== n) {
                                    c = n;
                                    var i = _(v(b(s.node.pnls, ".mm-panel_opened")[0], ".mm-listitem"));
                                    (i = i.filter(function(e) {
                                        return e.matches('[href="#' + m[n].id + '"]')
                                    })).length && s.setSelected(i[0].parentElement)
                                }
                                break
                            }
                    })
                }
            },
            searchfield: function() {
                var e, s = this,
                    i = ("boolean" == typeof(e = this.opts.searchfield) && (e = {
                            add: e
                        }),
                        "object" != typeof e && (e = {}),
                        "boolean" == typeof e.panel && (e.panel = {
                            add: e.panel
                        }),
                        "object" != typeof e.panel && (e.panel = {}),
                        "panel" == e.addTo && (e.panel.add = !0),
                        e.panel.add && (e.showSubPanels = !1,
                            e.panel.splash && (e.cancel = !0)),
                        e);
                this.opts.searchfield = l(i, x.options.searchfield),
                    this.conf.searchfield,
                    i.add && (this.bind("close:start", function() {
                            v(s.node.menu, ".mm-searchfield").forEach(function(e) {
                                e.blur()
                            })
                        }),
                        this.bind("initPanel:after", function(e) {
                            var t = null;
                            i.panel.add && (t = function() {
                                    var e = this.opts.searchfield,
                                        t = (this.conf.searchfield,
                                            b(this.node.pnls, ".mm-panel_search")[0]);
                                    if (t)
                                        return t;
                                    t = h("div.mm-panel.mm-panel_search.mm-hidden"),
                                        e.panel.id && (t.id = e.panel.id),
                                        e.panel.title && (t.dataset.mmTitle = e.panel.title);
                                    var n = h("ul");
                                    switch (t.append(n),
                                        this.node.pnls.append(t),
                                        this.initListview(n),
                                        this._initNavbar(t),
                                        e.panel.fx) {
                                        case !1:
                                            break;
                                        case "none":
                                            t.classList.add("mm-panel_noanimation");
                                            break;
                                        default:
                                            t.classList.add("mm-panel_fx-" + e.panel.fx)
                                    }
                                    if (e.panel.splash) {
                                        var i = h("div.mm-panel__content");
                                        i.innerHTML = e.panel.splash,
                                            t.append(i)
                                    }
                                    return t.classList.add("mm-panel"),
                                        t.classList.add("mm-hidden"),
                                        this.node.pnls.append(t),
                                        t
                                }
                                .call(s));
                            var n = null;
                            switch (i.addTo) {
                                case "panels":
                                    n = [e];
                                    break;
                                case "panel":
                                    n = [t];
                                    break;
                                default:
                                    "string" == typeof i.addTo ? n = v(s.node.menu, i.addTo) : "array" == m(i.addTo) && (n = i.addTo)
                            }
                            n.forEach(function(e) {
                                    e = function(e) {
                                            var t = this.opts.searchfield,
                                                n = this.conf.searchfield;
                                            if (e.parentElement.matches(".mm-listitem_vertical"))
                                                return null;
                                            if (a = v(e, ".mm-searchfield")[0])
                                                return a;

                                            function i(e, t) {
                                                if (t)
                                                    for (var n in t)
                                                        e.setAttribute(n, t[n])
                                            }
                                            var s, a = h((n.form ? "form" : "div") + ".mm-searchfield"),
                                                o = h("div.mm-searchfield__input"),
                                                r = h("input");
                                            return r.type = "text",
                                                r.autocomplete = "off",
                                                r.placeholder = this.i18n(t.placeholder),
                                                o.append(r),
                                                a.append(o),
                                                e.prepend(a),
                                                i(r, n.input),
                                                n.clear && ((s = h("a.mm-btn.mm-btn_close.mm-searchfield__btn")).setAttribute("href", "#"),
                                                    o.append(s)),
                                                i(a, n.form),
                                                n.form && n.submit && !n.clear && ((s = h("a.mm-btn.mm-btn_next.mm-searchfield__btn")).setAttribute("href", "#"),
                                                    o.append(s)),
                                                t.cancel && ((s = h("a.mm-searchfield__cancel")).setAttribute("href", "#"),
                                                    s.textContent = this.i18n("cancel"),
                                                    a.append(s)),
                                                a
                                        }
                                        .call(s, e),
                                        i.search && e && function(e) {
                                            var n = this,
                                                t = this.opts.searchfield,
                                                i = (this.conf.searchfield, {});
                                            e.closest(".mm-panel_search") ? (i.panels = v(this.node.pnls, ".mm-panel"),
                                                    i.noresults = [e.closest(".mm-panel")]) : e.closest(".mm-panel") ? (i.panels = [e.closest(".mm-panel")],
                                                    i.noresults = i.panels) : (i.panels = v(this.node.pnls, ".mm-panel"),
                                                    i.noresults = [this.node.menu]),
                                                i.panels = i.panels.filter(function(e) {
                                                    return !e.parentElement.matches(".mm-listitem_vertical")
                                                }),
                                                i.panels = i.panels.filter(function(e) {
                                                    return !e.matches(".mm-panel_search")
                                                }),
                                                i.listitems = [],
                                                i.dividers = [],
                                                i.panels.forEach(function(e) {
                                                    var t, n;
                                                    (t = i.listitems).push.apply(t, v(e, ".mm-listitem")),
                                                        (n = i.dividers).push.apply(n, v(e, ".mm-divider"))
                                                });
                                            var s = b(this.node.pnls, ".mm-panel_search")[0],
                                                a = v(e, "input")[0],
                                                o = v(e, ".mm-searchfield__cancel")[0];
                                            a.mmSearchfield = i,
                                                t.panel.add && t.panel.splash && (M(a, "focus.splash"),
                                                    S(a, "focus.splash", function(e) {
                                                        n.openPanel(s)
                                                    })),
                                                t.cancel && (M(a, "focus.cancel"),
                                                    S(a, "focus.cancel", function(e) {
                                                        o.classList.add("mm-searchfield__cancel-active")
                                                    }),
                                                    M(o, "click.splash"),
                                                    S(o, "click.splash", function(e) {
                                                        if (e.preventDefault(),
                                                            o.classList.remove("mm-searchfield__cancel-active"),
                                                            s.matches(".mm-panel_opened")) {
                                                            var t = b(n.node.pnls, ".mm-panel_opened-parent");
                                                            t.length && n.openPanel(t[t.length - 1])
                                                        }
                                                    })),
                                                t.panel.add && "panel" == t.addTo && this.bind("openPanel:finish", function(e) {
                                                    e === s && a.focus()
                                                }),
                                                M(a, "input.search"),
                                                S(a, "input.search", function(e) {
                                                    switch (e.keyCode) {
                                                        case 9:
                                                        case 16:
                                                        case 17:
                                                        case 18:
                                                        case 37:
                                                        case 38:
                                                        case 39:
                                                        case 40:
                                                            break;
                                                        default:
                                                            n.search(a)
                                                    }
                                                }),
                                                this.search(a)
                                        }
                                        .call(s, e)
                                }),
                                i.noResults && function(e) {
                                    if (e) {
                                        var t = this.opts.searchfield;
                                        if (this.conf.searchfield,
                                            e.closest(".mm-panel") || (e = b(this.node.pnls, ".mm-panel")[0]), !b(e, ".mm-panel__noresultsmsg").length) {
                                            var n = h("div.mm-panel__noresultsmsg.mm-hidden");
                                            n.innerHTML = this.i18n(t.noResults),
                                                e.append(n)
                                        }
                                    }
                                }
                                .call(s, i.panel.add ? t : e)
                        }),
                        this.clck.push(function(e, t) {
                            if (t.inMenu && e.matches(".mm-searchfield__btn")) {
                                if (e.matches(".mm-btn_close")) {
                                    var n = v(i = e.closest(".mm-searchfield"), "input")[0];
                                    return n.value = "",
                                        s.search(n), !0
                                }
                                var i;
                                if (e.matches(".mm-btn_next"))
                                    return (i = e.closest("form")) && i.submit(), !0
                            }
                        }))
            },
            sectionIndexer: function() {
                var e, a = this,
                    t = ("boolean" == typeof(e = this.opts.sectionIndexer) && (e = {
                            add: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                this.opts.sectionIndexer = l(t, x.options.sectionIndexer),
                    t.add && this.bind("initPanels:after", function() {
                        if (!a.node.indx) {
                            var t = "";
                            "abcdefghijklmnopqrstuvwxyz".split("").forEach(function(e) {
                                t += '<a href="#">' + e + "</a>"
                            });
                            var e = h("div.mm-sectionindexer");
                            e.innerHTML = t,
                                a.node.pnls.prepend(e),
                                a.node.indx = e,
                                a.node.indx.addEventListener("click", function(e) {
                                    e.target.matches("a") && e.preventDefault()
                                });
                            var n = function(e) {
                                if (e.target.matches("a")) {
                                    var t = e.target.textContent,
                                        n = b(a.node.pnls, ".mm-panel_opened")[0],
                                        i = -1,
                                        s = n.scrollTop;
                                    n.scrollTop = 0,
                                        v(n, ".mm-divider").filter(function(e) {
                                            return !e.matches(".mm-hidden")
                                        }).forEach(function(e) {
                                            i < 0 && t == e.textContent.trim().slice(0, 1).toLowerCase() && (i = e.offsetTop)
                                        }),
                                        n.scrollTop = -1 < i ? i : s
                                }
                            };
                            A ? (a.node.indx.addEventListener("touchstart", n),
                                a.node.indx.addEventListener("touchmove", n)) : a.node.indx.addEventListener("mouseover", n)
                        }
                        a.bind("openPanel:start", function(e) {
                            var t = v(e, ".mm-divider").filter(function(e) {
                                return !e.matches(".mm-hidden")
                            }).length;
                            a.node.indx.classList[t ? "add" : "remove"]("mm-sectionindexer_active")
                        })
                    })
            },
            setSelected: function() {
                var e, i = this,
                    t = ("boolean" == typeof(e = this.opts.setSelected) && (e = {
                            hover: e,
                            parent: e
                        }),
                        "object" != typeof e && (e = {}),
                        e);
                if (this.opts.setSelected = l(t, x.options.setSelected),
                    "detect" == t.current) {
                    var s = function(e) {
                        e = e.split("?")[0].split("#")[0];
                        var t = i.node.menu.querySelector('a[href="' + e + '"], a[href="' + e + '/"]');
                        if (t)
                            i.setSelected(t.parentElement);
                        else {
                            var n = e.split("/").slice(0, -1);
                            n.length && s(n.join("/"))
                        }
                    };
                    this.bind("initMenu:after", function() {
                        s.call(i, window.location.href)
                    })
                } else
                    t.current || this.bind("initListview:after", function(e) {
                        b(e, ".mm-listitem_selected").forEach(function(e) {
                            e.classList.remove("mm-listitem_selected")
                        })
                    });
                t.hover && this.bind("initMenu:after", function() {
                        i.node.menu.classList.add("mm-menu_selected-hover")
                    }),
                    t.parent && (this.bind("openPanel:finish", function(e) {
                            v(i.node.pnls, ".mm-listitem_selected-parent").forEach(function(e) {
                                e.classList.remove("mm-listitem_selected-parent")
                            });
                            for (var t = e.mmParent; t;)
                                t.matches(".mm-listitem_vertical") || t.classList.add("mm-listitem_selected-parent"),
                                t = (t = t.closest(".mm-panel")).mmParent
                        }),
                        this.bind("initMenu:after", function() {
                            i.node.menu.classList.add("mm-menu_selected-parent")
                        }))
            },
            sidebar: function() {
                var e, n = this;
                if (this.opts.offCanvas) {
                    var i = (("string" == typeof(e = this.opts.sidebar) || "boolean" == typeof e && e || "number" == typeof e) && (e = {
                            expanded: e
                        }),
                        "object" != typeof e && (e = {}),
                        "boolean" == typeof e.collapsed && e.collapsed && (e.collapsed = {
                            use: !0
                        }),
                        "string" != typeof e.collapsed && "number" != typeof e.collapsed || (e.collapsed = {
                            use: e.collapsed
                        }),
                        "object" != typeof e.collapsed && (e.collapsed = {}),
                        "boolean" == typeof e.expanded && e.expanded && (e.expanded = {
                            use: !0
                        }),
                        "string" != typeof e.expanded && "number" != typeof e.expanded || (e.expanded = {
                            use: e.expanded
                        }),
                        "object" != typeof e.expanded && (e.expanded = {}),
                        e);
                    if (this.opts.sidebar = l(i, x.options.sidebar),
                        i.collapsed.use) {
                        this.bind("initMenu:after", function() {
                            if (n.node.menu.classList.add("mm-menu_sidebar-collapsed"),
                                i.collapsed.blockMenu && n.opts.offCanvas && !b(n.node.menu, ".mm-menu__blocker")[0]) {
                                var e = h("a.mm-menu__blocker");
                                e.setAttribute("href", "#" + n.node.menu.id),
                                    n.node.menu.prepend(e)
                            }
                            i.collapsed.hideNavbar && n.node.menu.classList.add("mm-menu_hidenavbar"),
                                i.collapsed.hideDivider && n.node.menu.classList.add("mm-menu_hidedivider")
                        });
                        var t = function() {
                                n.node.wrpr.classList.add("mm-wrapper_sidebar-collapsed")
                            },
                            s = function() {
                                n.node.wrpr.classList.remove("mm-wrapper_sidebar-collapsed")
                            };
                        "boolean" == typeof i.collapsed.use ? this.bind("initMenu:after", t) : E(i.collapsed.use, t, s)
                    }
                    if (i.expanded.use) {
                        this.bind("initMenu:after", function() {
                                n.node.menu.classList.add("mm-menu_sidebar-expanded")
                            }),
                            t = function() {
                                n.node.wrpr.classList.add("mm-wrapper_sidebar-expanded"),
                                    n.node.wrpr.matches(".mm-wrapper_sidebar-closed") || n.open()
                            },
                            s = function() {
                                n.node.wrpr.classList.remove("mm-wrapper_sidebar-expanded"),
                                    n.close()
                            },
                            "boolean" == typeof i.expanded.use ? this.bind("initMenu:after", t) : E(i.expanded.use, t, s),
                            this.bind("close:start", function() {
                                n.node.wrpr.matches(".mm-wrapper_sidebar-expanded") && (n.node.wrpr.classList.add("mm-wrapper_sidebar-closed"),
                                    "remember" == i.expanded.initial && window.localStorage.setItem("mmenuExpandedState", "closed"))
                            }),
                            this.bind("open:start", function() {
                                n.node.wrpr.matches(".mm-wrapper_sidebar-expanded") && (n.node.wrpr.classList.remove("mm-wrapper_sidebar-closed"),
                                    "remember" == i.expanded.initial && window.localStorage.setItem("mmenuExpandedState", "open"))
                            });
                        var a = i.expanded.initial;
                        if ("remember" == i.expanded.initial) {
                            var o = window.localStorage.getItem("mmenuExpandedState");
                            switch (o) {
                                case "open":
                                case "closed":
                                    a = o
                            }
                        }
                        "closed" == a && this.bind("initMenu:after", function() {
                                n.node.wrpr.classList.add("mm-wrapper_sidebar-closed")
                            }),
                            this.clck.push(function(e, t) {
                                if (t.inMenu && t.inListview && n.node.wrpr.matches(".mm-wrapper_sidebar-expanded"))
                                    return {
                                        close: "closed" == i.expanded.initial
                                    }
                            })
                    }
                }
            },
            toggles: function() {
                var t = this;
                this.bind("initPanel:after", function(e) {
                    v(e, "input").forEach(function(e) {
                        y(e, t.conf.classNames.toggles.toggle, "mm-toggle"),
                            y(e, t.conf.classNames.toggles.check, "mm-check")
                    })
                })
            }
        },
        x.wrappers = {
            angular: function() {
                this.opts.onClick = {
                    close: !0,
                    preventDefault: !1,
                    setSelected: !0
                }
            },
            bootstrap: function() {
                var n = this;
                if (this.node.menu.matches(".navbar-collapse")) {
                    this.conf.offCanvas && (this.conf.offCanvas.clone = !1);
                    var e = h("nav"),
                        s = h("div");
                    e.append(s),
                        b(this.node.menu).forEach(function(e) {
                            switch (!0) {
                                case e.matches(".navbar-nav"):
                                    s.append((t = e,
                                        i = h("ul"),
                                        v(t, ".nav-item").forEach(function(e) {
                                            var t = h("li");
                                            if (e.matches(".active") && t.classList.add("Selected"), !e.matches(".nav-link")) {
                                                var n = b(e, ".dropdown-menu")[0];
                                                n && t.append(o(n)),
                                                    e = b(e, ".nav-link")[0]
                                            }
                                            t.prepend(a(e)),
                                                i.append(t)
                                        }),
                                        i));
                                    break;
                                case e.matches(".dropdown-menu"):
                                    s.append(o(e));
                                    break;
                                case e.matches(".form-inline"):
                                    n.conf.searchfield.form = {
                                            action: e.getAttribute("action") || null,
                                            method: e.getAttribute("method") || null
                                        },
                                        n.conf.searchfield.input = {
                                            name: e.querySelector("input").getAttribute("name") || null
                                        },
                                        n.conf.searchfield.clear = !1,
                                        n.conf.searchfield.submit = !0;
                                    break;
                                default:
                                    s.append(e.cloneNode(!0))
                            }
                            var t, i
                        }),
                        this.bind("initMenu:before", function() {
                            document.body.prepend(e),
                                n.node.menu = e
                        });
                    var t = this.node.menu.parentElement;
                    if (t) {
                        var i = t.querySelector(".navbar-toggler");
                        i && (delete i.dataset.target,
                            i.removeAttribute("aria-controls"),
                            i.outerHTML = i.outerHTML,
                            (i = t.querySelector(".navbar-toggler")).addEventListener("click", function(e) {
                                e.preventDefault(),
                                    e.stopImmediatePropagation(),
                                    n[n.vars.opened ? "close" : "open"]()
                            }))
                    }
                }

                function a(e) {
                    for (var t = h(e.matches("a") ? "a" : "span"), n = ["href", "title", "target"], i = 0; i < n.length; i++)
                        void 0 !== e.getAttribute(n[i]) && t.setAttribute(n[i], e.getAttribute(n[i]));
                    return t.innerHTML = e.innerHTML,
                        v(t, ".sr-only").forEach(function(e) {
                            e.remove()
                        }),
                        t
                }

                function o(e) {
                    var n = h("ul");
                    return b(e).forEach(function(e) {
                            var t = h("li");
                            e.matches(".dropdown-divider") ? t.classList.add("Divider") : e.matches(".dropdown-item") && t.append(a(e)),
                                n.append(t)
                        }),
                        n
                }
            },
            olark: function() {
                this.conf.offCanvas.page.noSelector.push("#olark")
            },
            turbolinks: function() {
                var t;
                document.addEventListener("turbolinks:before-visit", function(e) {
                        t = document.querySelector(".mm-wrapper").className.split(" ").filter(function(e) {
                            return /mm-/.test(e)
                        })
                    }),
                    document.addEventListener("turbolinks:load", function(e) {
                        void 0 !== t && (document.querySelector(".mm-wrapper").className = t)
                    })
            },
            wordpress: function() {
                this.conf.classNames.selected = "current-menu-item";
                var e = document.getElementById("wpadminbar");
                e && (e.style.position = "fixed",
                    e.classList.add("mm-slideout"))
            }
        },
        t.default = x,
        window.Mmenu = x,
        (F = window.jQuery || window.Zepto || null) && (F.fn.mmenu = function(n, i) {
            var s = F();
            return this.each(function(e, t) {
                    t.mmApi || (l = new x(t, n, i),
                        (m = F(l.node.menu)).data("mmenu", l.API),
                        s = s.add(m))
                }),
                s
        })
}]);