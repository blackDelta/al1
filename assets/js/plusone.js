var gapi = window.gapi = window.gapi || {};
gapi._bs = new Date().getTime();
(function () {
    var j = void 0, l = !0, m = null, n = !1, aa = encodeURIComponent, r = window, ba = Object, s = String, t = document, v = "push", w = "test", ca = "exec", x = "replace", da = "getElementById", ea = "concat", y = "indexOf", fa = "readyState", z = "createElement", A = "setAttribute", ha = "getTime", ia = "getElementsByTagName", C = "length", E = "location", F = "style", ja = "call", G = "getAttribute", H = "href", ka = "action", J = "apply", la = "parentNode", K = "join", ma = "toLowerCase";
    var L = r, M = t, na = L[E], oa = function () {
    }, pa = /\[native code\]/, N = function (a, b, c) {
        return a[b] = a[b] || c
    }, qa = function (a) {
        for (var b = 0; b < this[C]; b++)if (this[b] === a)return b;
        return-1
    }, ra = /&/g, sa = /</g, ta = />/g, ua = /"/g, va = /'/g, wa = function (a) {
        return s(a)[x](ra, "&amp;")[x](sa, "&lt;")[x](ta, "&gt;")[x](ua, "&quot;")[x](va, "&#39;")
    }, R = function () {
        var a;
        if ((a = ba.create) && pa[w](a))a = a(m); else {
            a = {};
            for (var b in a)a[b] = j
        }
        return a
    }, S = function (a, b) {
        return ba.prototype.hasOwnProperty[ja](a, b)
    }, T = function (a, b) {
        var a = a || {}, c;
        for (c in a)S(a,
            c) && (b[c] = a[c])
    }, V = N(L, "gapi", {});
    var xa = function (a, b, c) {
        var e = RegExp("([#].*&|[#])" + b + "=([^&#]*)", "g"), b = RegExp("([?#].*&|[?#])" + b + "=([^&#]*)", "g");
        if (a = a && (e[ca](a) || b[ca](a)))try {
            c = decodeURIComponent(a[2])
        } catch (d) {
        }
        return c
    }, ya = /^([^?#]*)(\?([^#]*))?(\#(.*))?$/, za = function (a) {
        var b = [];
        if (a)for (var c in a)S(a, c) && a[c] != m && b[v](aa(c) + "=" + aa(a[c]));
        return b
    }, Aa = function (a, b, c) {
        var a = a.match(ya), e = R();
        e.n = a[1];
        e.d = a[3] ? [a[3]] : [];
        e.c = a[5] ? [a[5]] : [];
        e.d[v][J](e.d, za(b));
        e.c[v][J](e.c, za(c));
        return e.n + (0 < e.d[C] ? "?" + e.d[K]("&") : "") +
            (0 < e.c[C] ? "#" + e.c[K]("&") : "")
    };
    var Ba = function (a, b, c) {
        if (L[b + "EventListener"])L[b + "EventListener"]("message", a, n); else if (L[c + "tachEvent"])L[c + "tachEvent"]("onmessage", a)
    };
    var W;
    W = N(L, "___jsl", R());
    N(W, "I", 0);
    N(W, "hel", 10);
    var Ca = function (a) {
        return!W.dpo ? xa(a, "jsh", W.h) : W.h
    }, Ea = function (a) {
        return N(N(W, "H", R()), a, R())
    };
    var Fa = N(W, "perf", R()), Ga = N(Fa, "g", R()), Ha = N(Fa, "i", R());
    N(Fa, "r", []);
    R();
    R();
    var Ia = function (a, b, c) {
        var e = Fa.r;
        "function" === typeof e ? e(a, b, c) : e[v]([a, b, c])
    }, X = function (a, b, c) {
        Ga[a] = !b && Ga[a] || c || (new Date)[ha]();
        Ia(a)
    }, Ka = function (a, b, c) {
        b && 0 < b[C] && (b = Ja(b), c && 0 < c[C] && (b += "___" + Ja(c)), 28 < b[C] && (b = b.substr(0, 28) + (b[C] - 28)), c = b, b = N(Ha, "_p", R()), N(b, c, R())[a] = (new Date)[ha](), Ia(a, "_p", c))
    }, Ja = function (a) {
        return a[K]("__")[x](/\./g, "_")[x](/\-/g, "_")[x](/\,/g, "_")
    };
    var La = R(), Ma = [], Y;
    Y = {b:"callback", l:"sync", j:"config", e:"_c", g:"h", o:"platform", i:"jsl", TIMEOUT:"timeout", k:"ontimeout"};
    Ma[v]([Y.i, function (a) {
        for (var b in a)if (S(a, b)) {
            var c = a[b];
            "object" == typeof c ? W[b] = N(W, b, [])[ea](c) : N(W, b, c)
        }
        if (a = a.u)b = N(W, "us", []), b[v](a), (c = /^https:(.*)$/[ca](a)) && b[v]("http:" + c[1]), N(W, "u", a)
    }]);
    var Na = decodeURI("%73cript");
    La.m = function (a) {
        var b = W.ms || "https://apis.google.com", a = a[0];
        if (!a || 0 <= a[y](".."))throw"Bad hint";
        return b + "/" + a[x](/^\//, "")
    };
    var Oa = function (a) {
        return a[K](",")[x](/\./g, "_")[x](/-/g, "_")
    }, Pa = function (a, b) {
        for (var c = [], e = 0; e < a[C]; ++e) {
            var d = a[e];
            d && 0 > qa[ja](b, d) && c[v](d)
        }
        return c
    }, Qa = /[@"'<>#\?&%]/, Ra = /^https?:\/\/[^\/\?#]+\.google\.com(:\d+)?\/[^\?#]+$/, Sa = /\/cb=/g, Ta = function (a) {
        var b = M[z](Na);
        b[A]("src", a);
        b.async = "true";
        a = M[ia](Na)[0];
        a[la].insertBefore(b, a)
    }, Va = function (a, b) {
        var c = b || {};
        "function" == typeof b && (c = {}, c[Y.b] = b);
        var e = c, d = e && e[Y.e];
        if (d)for (var f = 0; f < Ma[C]; f++) {
            var g = Ma[f][0], i = Ma[f][1];
            i && S(d, g) && i(d[g],
                a, e)
        }
        if (!(e = c[Y.g]))if (e = Ca(na[H]), !e)throw"Bad hint";
        var h = e, p = c[Y.b], k = c[Y.j], d = c[Y.TIMEOUT], u = c[Y.k], q = m, D = n;
        if (d && !u || !d && u)throw"Timeout requires both the timeout parameter and ontimeout parameter to be set";
        var e = N(Ea(h), "r", []).sort(), B = N(Ea(h), "L", []).sort(), U = [][ea](e), ga = function (a, b) {
            if (D)return 0;
            L.clearTimeout(q);
            B[v][J](B, I);
            var c = ((V || {}).config || {}).update;
            c ? c(k) : k && N(W, "cu", [])[v](k);
            if (b) {
                Ka("me0", a, U);
                try {
                    Ua(function () {
                        var a;
                        a = h === Ca(na[H]) ? N(V, "_", R()) : R();
                        a = N(Ea(h), "_", a);
                        b(a)
                    })
                } finally {
                    Ka("me1",
                        a, U)
                }
            }
            p && p();
            return 1
        };
        0 < d && (q = L.setTimeout(function () {
            D = l;
            u()
        }, d));
        if (a) {
            d = a.split(":").sort();
            f = [];
            g = j;
            for (i = 0; i < d[C]; i++) {
                var O = d[i];
                O != g && f[v](O);
                g = O
            }
            d = f
        } else d = [];
        var I = Pa(d, B);
        if (!I[C])return ga(I);
        var I = Pa(d, e), P = N(W, "CP", []), Q = P[C];
        P[Q] = function (a) {
            if (!a)return 0;
            Ka("ml1", I, U);
            var b = function () {
                P[Q] = m;
                return ga(I, a)
            };
            if (0 < Q && P[Q - 1])P[Q] = b; else for (b(); (b = P[++Q]) && b(););
        };
        if (!I[C])return P[Q](oa);
        var Da = "loaded_" + W.I++;
        V[Da] = function (a) {
            P[Q](a);
            V[Da] = m
        };
        d = h.split(";");
        d = (f = La[d.shift()]) && f(d);
        if (!d)throw"Bad hint:" + h;
        f = d = d[x]("__features__", Oa(I))[x](/\/$/, "") + (e[C] ? "/ed=1/exm=" + Oa(e) : "") + ("/cb=gapi." + Da);
        g = f.match(Sa);
        if (!g || !(1 === g[C] && Ra[w](f) && !Qa[w](f)))throw"Bad URL " + d;
        e[v][J](e, I);
        Ka("ml0", I, U);
        c[Y.l] || L.___gapisync ? (c = d, "loading" != M[fa] ? Ta(c) : M.write("<" + Na + ' src="' + encodeURI(c) + '"></' + Na + ">")) : Ta(d)
    };
    var Ua = function (a) {
        if (W.hee && 0 < W.hel)try {
            return a()
        } catch (b) {
            W.hel--, Va("debug_error", function () {
                r.___jsl.hefn(b)
            })
        } else return a()
    };
    V.load = function (a, b) {
        return Ua(function () {
            return Va(a, b)
        })
    };
    var Wa = function () {
        return r.___jsl = r.___jsl || {}
    }, Xa = function (a) {
        var b = Wa();
        b[a] = b[a] || [];
        return b[a]
    }, Z = function (a) {
        var b = Wa();
        b.cfg = !a && b.cfg || {};
        return b.cfg
    }, Ya = function (a) {
        return"object" === typeof a && /\[native code\]/[w](a[v])
    }, Za = function (a, b) {
        if (b)for (var c in b)b.hasOwnProperty(c) && (a[c] && b[c] && "object" === typeof a[c] && "object" === typeof b[c] && !Ya(a[c]) && !Ya(b[c]) ? Za(a[c], b[c]) : b[c] && "object" === typeof b[c] ? (a[c] = Ya(b[c]) ? [] : {}, Za(a[c], b[c])) : a[c] = b[c])
    }, $ = function (a) {
        if (!a)return Z();
        for (var a =
            a.split("/"), b = Z(), c = 0, e = a[C]; b && "object" === typeof b && c < e; ++c)b = b[a[c]];
        return c === a[C] && b !== j ? b : j
    };
    var $a = function (a) {
        var b = t[z]("div"), c = t[z]("a");
        c.href = a;
        b.appendChild(c);
        b.innerHTML = b.innerHTML;
        return b.firstChild[H]
    }, ab = function (a) {
        for (var a = a || "canonical", b = t[ia]("link"), c = 0, e = b[C]; c < e; c++) {
            var d = b[c], f = d[G]("rel");
            if (f && f[ma]() == a && (d = d[G]("href")))if (d = $a(d))return d
        }
        return r[E][H]
    };
    var bb = {allowtransparency:"true", frameborder:"0", hspace:"0", marginheight:"0", marginwidth:"0", scrolling:"no", style:"", tabindex:"0", vspace:"0", width:"100%"}, cb = 0;
    var db = /:([a-zA-Z_]+):/g, eb = {style:"position:absolute;top:-10000px;width:300px;margin:0px;borderStyle:none"}, fb = "onPlusOne _ready _close,_open _resizeMe _renderstart oncircled".split(" "), gb = m, hb = N(W, "WI", R()), ib = function () {
        var a = $("googleapis.config/sessionIndex");
        a == m && (a = r.__X_GOOG_AUTHUSER);
        if (a == m) {
            var b = r.google;
            b && (a = b.authuser)
        }
        a == m && (a = j, a == m && (a = r[E][H]), a = a ? xa(a, "authuser") || m : m);
        return a == m ? m : s(a)
    }, jb = function (a, b) {
        if (!gb) {
            var c = $("iframes/:socialhost:"), e = ib() || "0", d = ib();
            gb = {socialhost:c,
                session_index:e, session_prefix:d !== j && d !== m && "" !== d ? "u/" + d + "/" : ""}
        }
        return gb[b] || ""
    }, mb = function (a, b, c, e) {
        if (!b[la])return m;
        if (!e) {
            for (var e = R(), d = 0 != b.nodeName[ma]()[y]("g:"), f = 0, g = b.attributes[C]; f < g; f++) {
                var i = b.attributes[f], h = i.name, i = i.value;
                0 <= qa[ja](kb, h) || (d && 0 != h[y]("data-") || "null" === i) || (d && (h = h.substr(5)), e[h[ma]()] = i)
            }
            d = b[F];
            (f = lb(d && d.height)) && (e.height = s(f));
            (d = lb(d && d.width)) && (e.width = s(d))
        }
        d = f = a;
        "plus" == a && e[ka] && (f = a + "_" + e[ka], d = a + "/" + e[ka]);
        (f = $("iframes/" + f + "/url")) || (f = ":socialhost:/_/widget/render/" +
            d);
        d = f[x](db, jb);
        f = {};
        T(e, f);
        f.hl = $("lang") || "en-US";
        f.origin = r[E].origin || r[E].protocol + "//" + r[E].host;
        "plus" === a && (g = f[H] ? $a(f[H]) : ab(e[ka] ? m : "publisher"), f.url = g, delete f[H]);
        "plusone" === a && (f.url = e[H] ? $a(e[H]) : ab(), g = e.db, h = $(), g == m && h && (g = h.db, g == m && (g = h.gwidget && h.gwidget.db)), f.db = g || j, g = e.ecp, h = $(), g == m && h && (g = h.ecp, g == m && (g = h.gwidget && h.gwidget.ecp)), f.ecp = g || j, delete f[H]);
        f.hl = $("lang") || "en-US";
        W.ILI && (f.iloader = "1");
        delete f["data-onload"];
        delete f.rd;
        g = $("inline/css");
        "undefined" !==
            typeof g && (0 < c && g >= c) && (f.ic = "1");
        var g = /^#|^fr-/, c = {}, p;
        for (p in f)S(f, p) && g[w](p) && (c[p[x](g, "")] = f[p], delete f[p]);
        p = [][ea](fb);
        g = $("iframes/" + a + "/methods");
        "object" === typeof g && pa[w](g[v]) && (p = p[ea](g));
        for (var k in e)if (S(e, k) && /^on/[w](k) && ("plus" != a || "onconnect" != k))p[v](k), delete f[k];
        c._methods = p[K](",");
        d = Aa(d, f, c);
        e.rd ? k = b : (k = t[z]("div"), b[A]("data-gapistub", l), k[F].cssText = "position:absolute;width:100px;left:-10000px;", b[la].insertBefore(k, b));
        k.id || (b = k, N(hb, a, 0), p = "___" + a + "_" + hb[a]++,
            b.id = p);
        b = R();
        b[">type"] = a;
        T(e, b);
        k[A]("data-gwattr", za(b)[K](":"));
        var u;
        p = d;
        a = k;
        b = {attributes:eb};
        k = a.ownerDocument;
        f = 0;
        do c = b.id || ["I", cb++, "_", (new Date)[ha]()][K](""); while (k[da](c) && 5 > ++f);
        if (!(5 > f))throw Error("Error creating iframe id");
        g = k[E][H];
        f = R();
        (h = xa(g, "_bsh", W.bsh)) && (f._bsh = h);
        (g = Ca(g)) && (f.jsh = g);
        var q, g = R();
        g.id = c;
        g.parent = k[E].protocol + "//" + k[E].host;
        h = xa(k[E][H], "id", "");
        i = xa(k[E][H], "pfname", "");
        (h = h ? i + "/" + h : "") && (g.pfname = h);
        b.hintInFragment ? T(f, g) : q = f;
        p = Aa(p, q, g);
        q = R();
        T(bb,
            q);
        q.name = q.id = c;
        T(b.attributes, q);
        q.src = p;
        try {
            u = k[z]('<iframe frameborder="' + wa(q.frameborder) + '" scrolling="' + wa(q.scrolling) + '" name="' + wa(q.name) + '"/>')
        } catch (D) {
            u = k[z]("iframe")
        }
        for (var B in q)b = q[B], "style" == B && "object" === typeof b ? T(b, u[F]) : u[A](B, q[B]);
        for (; a.firstChild;)a.removeChild(a.firstChild);
        a.appendChild(u);
        q.allowtransparency && (u.allowTransparency = l);
        B = {};
        B.userParams = e;
        B.url = d;
        B.iframeNode = u;
        B.id = u[G]("id");
        return B
    }, kb = ["style", "data-gapiscan"], lb = function (a) {
        var b = j;
        "number" ===
            typeof a ? b = a : "string" === typeof a && (b = parseInt(a, 10));
        return b
    }, nb = function () {
    };
    var ob, pb = /(?:^|\s)g-((\S)*)(?:$|\s)/, qb = R(), rb = N(W, "FW", []), tb = function (a, b) {
        sb(j, n, a, b)
    }, sb = function (a, b, c, e) {
        X("ps0", l);
        var c = ("string" === typeof c ? t[da](c) : c) || M, d, f = M.documentMode;
        if (c.querySelectorAll && (!f || 8 < f)) {
            if (e)d = [e]; else if (pa[w](ba.keys))d = ba.keys(qb); else {
                f = [];
                for (d in qb)S(qb, d) && f[v](d);
                d = f
            }
            for (var f = [], g = 0; g < d[C]; g++) {
                var i = d[g];
                f[v](".g-" + i, "g\\:" + i)
            }
            d = c.querySelectorAll(f[K](","))
        } else d = c[ia]("*");
        c = R();
        for (f = 0; f < d[C]; f++) {
            g = d[f];
            var h = g, i = e, p = h.nodeName[ma](), k = j;
            h[G]("data-gapiscan") ?
                i = m : (0 == p[y]("g:") ? k = p.substr(2) : (h = (h = s(h.className || h[G]("class"))) && pb[ca](h)) && (k = h[1]), i = k && qb[k] && (!i || k === i) ? k : m);
            i && (g[A]("data-gapiscan", l), N(c, i, [])[v](g))
        }
        if (b)for (var u in c) {
            b = c[u];
            for (e = 0; e < b[C]; e++)b[e][A]("data-onload", l)
        }
        for (var q in c)rb[v](q);
        X("ps1", l);
        u = rb[K](":");
        V.load(u, a);
        if (ub(ob || {}))for (var D in c)vb(D); else {
            a = [];
            for (D in c) {
                q = c[D];
                b = 0;
                for (e = q[C]; b < e; b++)if (d = mb(D, q[b], e))(f = d.id) && a[v](f), vb(D, d)
            }
            wb(u, a)
        }
    }, xb = function (a) {
        var b = N(V, a, {});
        b.go || (b.go = function (b) {
            return tb(b,
                a)
        }, b.render = function (b, e) {
            var d = e || {};
            d.type = a;
            var f = d, d = f.type;
            delete f.type;
            if (!d || !qb[d])throw Error("Unsupported widget " + d || "");
            var g = ("string" === typeof b ? t[da](b) : b) || j;
            if (g && 1 === g.nodeType) {
                var i = {}, h;
                for (h in f)S(f, h) && (i[h[ma]()] = f[h]);
                f = i;
                f.rd = 1;
                h = mb(d, g, 0, f);
                vb(d, h);
                (h = h.id) && wb(d, [h])
            }
        })
    };
    var vb = function (a, b) {
        var c = N(W, "watt", R())[a];
        b && c ? c(b) : V.load(a, function () {
            var c = N(W, "watt", R())[a], d = b && b.iframeNode;
            !d || !c ? (0, V[a].go)(d && d[la]) : c(b)
        })
    }, ub = function () {
        return n
    }, wb = function () {
    };
    N(V, "platform", {}).go = tb;
    ub = function (a) {
        for (var b = [Y.e, Y.i, Y.g], c = 0; c < b[C] && a; c++)a = a[b[c]];
        b = Ca(na[H]);
        return!a || 0 != a[y]("n;") && 0 != b[y]("n;") && a !== b
    };
    wb = function (a, b) {
        var c = function () {
            Ba(e, "remove", "de")
        }, e = function (f) {
            var e = f.data, i = f.origin;
            if (yb(e, b)) {
                var h = d;
                d = n;
                h && X("rqe");
                Va(a, function () {
                    h && X("rqd");
                    c();
                    for (var a = N(W, "RPMQ", []), b = 0; b < a[C]; b++)a[b]({data:e, origin:i})
                })
            }
        };
        if (!(0 === b[C] || !r.JSON || !r.JSON.parse)) {
            var d = l;
            Ba(e, "add", "at");
            Va(a, c)
        }
    };
    Ma[v]([Y.o, function (a, b, c) {
        ob = c;
        b && rb[v](b);
        for (b = 0; b < a[C]; b++)qb[a[b]] = 1;
        for (b = 0; b < a[C]; b++)xb(a[b]);
        if (b = r.__GOOGLEAPIS)b.googleapis && !b["googleapis.config"] && (b["googleapis.config"] = b.googleapis), N(W, "ci", [])[v](b), r.__GOOGLEAPIS = j;
        Z(l);
        var e = r.___gcfg, b = Xa("cu");
        if (e && e !== r.___gu) {
            var d = {};
            Za(d, e);
            b[v](d);
            r.___gu = e
        }
        var e = Xa("cu"), f = t.scripts || t[ia]("script") || [], d = [], g = [], i = Wa().u;
        i && g[v](i);
        Wa().us && g[v][J](g, Wa().us);
        for (i = 0; i < f[C]; ++i)for (var h = f[i], p = 0; p < g[C]; ++p)h.src && 0 == h.src[y](g[p]) &&
        d[v](h);
        0 == d[C] && f[f[C] - 1].src && d[v](f[f[C] - 1]);
        for (f = 0; f < d[C]; ++f)if (!d[f][G]("gapi_processed")) {
            d[f][A]("gapi_processed", l);
            (g = d[f]) ? (i = g.nodeType, g = 3 == i || 4 == i ? g.nodeValue : g.textContent || g.innerText || g.innerHTML || "") : g = j;
            if (g) {
                for (; 0 == g.charCodeAt(g[C] - 1);)g = g.substring(0, g[C] - 1);
                i = j;
                try {
                    i = (new Function("return (" + g + "\n)"))()
                } catch (k) {
                }
                if ("object" === typeof i)g = i; else {
                    try {
                        i = (new Function("return ({" + g + "\n})"))()
                    } catch (u) {
                    }
                    g = "object" === typeof i ? i : {}
                }
            } else g = j;
            g && e[v](g)
        }
        f = Xa("cd");
        e = 0;
        for (d = f[C]; e <
            d; ++e)Za(Z(), f[e]);
        f = Xa("ci");
        e = 0;
        for (d = f[C]; e < d; ++e)Za(Z(), f[e]);
        e = 0;
        for (d = b[C]; e < d; ++e)Za(Z(), b[e]);
        if ("explicit" != $("parsetags")) {
            b = N(W, "sws", []);
            b[v][J](b, a);
            var q;
            if (c) {
                var D = c[Y.b];
                D && (q = function () {
                    L.setTimeout(D, 0)
                }, delete c[Y.b])
            }
            if ("complete" !== M[fa])try {
                sb(j, l)
            } catch (B) {
            }
            var U = function () {
                sb(q, l)
            };
            if ("complete" === M[fa])U(); else {
                var ga = n, O = function () {
                    if (!ga)return ga = l, U[J](this, arguments)
                };
                L.addEventListener ? (L.addEventListener("load", O, n), L.addEventListener("DOMContentLoaded", O, n)) : L.attachEvent &&
                    (L.attachEvent("onreadystatechange", function () {
                        "complete" === M[fa] && O[J](this, arguments)
                    }), L.attachEvent("onload", O))
            }
        }
    }]);
    var zb = /^\{h\:'/, Ab = /^!_/, yb = function (a, b) {
        a = s(a);
        if (zb[w](a))return l;
        a = a[x](Ab, "");
        if (!/^\{/[w](a))return n;
        try {
            var c = r.JSON.parse(a)
        } catch (e) {
            return n
        }
        if (!c)return n;
        var d = c.f;
        return c.s && d && -1 != qa[ja](b, d) ? ("_renderstart" === c.s && (c = c.a && c.a[1], d = M[da](d), c && d && nb(d[la], d, c)), l) : n
    };
    nb = function (a, b, c) {
        if (c.width && c.height) {
            a[F].cssText = "";
            var e = c.width, c = c.height, d = a[F];
            d.textIndent = "0";
            d.margin = "0";
            d.padding = "0";
            d.background = "transparent";
            d.borderStyle = "none";
            d.cssFloat = "none";
            d.styleFloat = "none";
            d.lineHeight = "normal";
            d.fontSize = "1px";
            d.verticalAlign = "baseline";
            a[F].display = "inline-block";
            a = b[F];
            a.position = "static";
            a.left = 0;
            a.top = 0;
            a.visibility = "visible";
            e && (a.width = e + "px");
            c && (a.height = c + "px");
            b["data-csi-wdt"] = (new Date)[ha]()
        }
    };
    X("bs0", l, r.gapi._bs);
    X("bs1", l);
    delete r.gapi._bs;
})();
gapi.load("plusone", {callback:window["gapi_onload"], _c:{"platform":["plusone", "plus", "additnow"], "jsl":{"u":"https://apis.google.com/js/plusone.js", "dpo":false, "hee":true, "ci":{"services":{}, "inline":{"css":1}, "lexps":[34, 69, 71, 65, 36, 40, 74, 75, 15, 45, 17, 51, 61, 60, 30], "oauth-flow":{}, "report":{}, "iframes":{"additnow":{"url":"https://apis.google.com/additnow/additnow.html?bsv=m&abtk=AEIZW7TP/9MXmE6mM7e%2B75GVRn2vPsvyPreHmyJzLzo04lzru4eVR/Fd3qFrngjf8MCq8/2K0gNwM/l3no2UHIcUZeqEPkMm%2BIxfJoSGrsf1UDCVnVN8uPI%3D"}, "plus":{"methods":["onauth"], "url":":socialhost:/u/:session_index:/_/pages/badge?bsv=m&abtk=AEIZW7Qi1ZprtEciz8OSqFkXHqcwipioJIkZfovlbi89PfqSK0binSkBcVy0FmCQRMw6pdQEFMwiVkdMmsWHGoIgVzVcRbfzXgWscDY0I7UDXVx3QxOrtwM%3D"}, ":socialhost:":"https://plusone.google.com", "plus_circle":{"params":{"url":""}, "url":":socialhost:/:session_prefix:_/widget/plus/circle?bsv=m&abtk=AEIZW7S9qvAYGsIAYHNNQ4kGqAo70%2BpDlagE297OSDucdGNiemxilGx9yqM8TQXBR/hDGBS6DB9d7mySR/TiS5biRMsRgK/fsdbQlaanYH4xLZ9lZ5cPFaY%3D"}, "evwidget":{"params":{"url":""}, "url":":socialhost:/:session_prefix:_/events/widget?bsv=m&abtk=AEIZW7SHKGTA%2BOyIxjX9ARfRw%2BkT6acEoKe9/dtO77L0zF4kgpTHCQjig8t4jC4qkTNOQz3MHVPtBBfxlekBwcsTSnkfIMmGWNaorZUcu/vFwSYanNkYj%2Bc%3D"}, ":signuphost:":"https://plus.google.com", "plusone":{"preloadUrl":["https://ssl.gstatic.com/s2/oz/images/stars/po/Publisher/sprite4-a67f741843ffc4220554c34bd01bb0bb.png"], "params":{"count":"", "url":"", "size":""}, "url":":socialhost:/:session_prefix:_/+1/fastbutton?bsv=m&abtk=AEIZW7QkccslMiOCYv1BWaxq6lsI121AIzIV8fiD8F4rrA6uBSPZN9kyw8m6pbCEBOH6oGDE0emw855eeSzJ3nMSJSx5Qy3DJSbBQ5FNTWIZYO2an4ubPHY%3D"}, "plus_share":{"params":{"url":""}, "url":":socialhost:/:session_prefix:_/+1/sharebutton?plusShare=true&bsv=m&abtk=AEIZW7T0bmG8TC0JZZbFDT5nICQbRl4rKxWRIIBwyI/yP3wAEOKxJIhrfv6nnlBOXhs7bjHTHqVF3nWvMvv%2BZMCsoFTaMNpHwWz4xugmwQJ/bjS/3Gf8pQQ%3D"}}, "isPlusUser":false, "debug":{"host":"https://plusone.google.com", "reportExceptionRate":0.05, "rethrowException":true}, "csi":{"rate":0}, "googleapis.config":{"mobilesignupurl":"https://m.google.com/app/plus/oob?"}}, "h":"m;/_/apps-static/_/js/gapi/__features__/rt=j/ver=TBE1qJAepmc.en./sv=1/am=!sJNviPhShmWoiox50g/d=1/rs=AItRSTO9o2FKZ_Fiwf7tdl3KX7Smo-vabA", "fp":"20d8423998bd3e1941b22072432a9ff8d96d933b"}, "fp":"20d8423998bd3e1941b22072432a9ff8d96d933b"}});