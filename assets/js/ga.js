(function () {
    var g = void 0, h = !0, i = null, k = !1, aa = encodeURIComponent, ba = Infinity, ca = setTimeout, da = decodeURIComponent, l = Math;

    function ea(a, b) {
        return a.name = b
    }

    var n = "push", ha = "test", ia = "slice", p = "replace", ja = "load", ka = "floor", la = "charAt", ma = "value", q = "indexOf", na = "match", oa = "port", pa = "createElement", qa = "path", r = "name", u = "host", v = "toString", w = "length", x = "prototype", ra = "clientWidth", y = "split", sa = "stopPropagation", ta = "scope", z = "location", ua = "search", A = "protocol", va = "clientHeight", wa = "href", B = "substring", xa = "apply", ya = "navigator", C = "join", D = "toLowerCase", E;

    function za(a, b) {
        switch (b) {
            case 0:
                return"" + a;
            case 1:
                return 1 * a;
            case 2:
                return!!a;
            case 3:
                return 1E3 * a
        }
        return a
    }

    function Aa(a) {
        return"function" == typeof a
    }

    function Ba(a) {
        return a != g && -1 < (a.constructor + "")[q]("String")
    }

    function F(a, b) {
        return g == a || "-" == a && !b || "" == a
    }

    function Ca(a) {
        if (!a || "" == a)return"";
        for (; a && -1 < " \n\r\t"[q](a[la](0));)a = a[B](1);
        for (; a && -1 < " \n\r\t"[q](a[la](a[w] - 1));)a = a[B](0, a[w] - 1);
        return a
    }

    function Da() {
        return l.round(2147483647 * l.random())
    }

    function Ea() {
    }

    function G(a, b) {
        if (aa instanceof Function)return b ? encodeURI(a) : aa(a);
        H(68);
        return escape(a)
    }

    function I(a) {
        a = a[y]("+")[C](" ");
        if (da instanceof Function)try {
            return da(a)
        } catch (b) {
            H(17)
        } else H(68);
        return unescape(a)
    }

    var Fa = function (a, b, c, d) {
        a.addEventListener ? a.addEventListener(b, c, !!d) : a.attachEvent && a.attachEvent("on" + b, c)
    }, Ga = function (a, b, c, d) {
        a.removeEventListener ? a.removeEventListener(b, c, !!d) : a.detachEvent && a.detachEvent("on" + b, c)
    };

    function Ha(a, b) {
        if (a) {
            var c = J[pa]("script");
            c.type = "text/javascript";
            c.async = h;
            c.src = a;
            c.id = b;
            var d = J.getElementsByTagName("script")[0];
            d.parentNode.insertBefore(c, d);
            return c
        }
    }

    function K(a) {
        return a && 0 < a[w] ? a[0] : ""
    }

    function L(a) {
        var b = a ? a[w] : 0;
        return 0 < b ? a[b - 1] : ""
    }

    var Ja = function () {
        this.prefix = "ga.";
        this.S = {}
    };
    Ja[x].set = function (a, b) {
        this.S[this.prefix + a] = b
    };
    Ja[x].get = function (a) {
        return this.S[this.prefix + a]
    };
    Ja[x].contains = function (a) {
        return this.get(a) !== g
    };
    function Ka(a) {
        0 == a[q]("www.") && (a = a[B](4));
        return a[D]()
    }

    function La(a, b) {
        var c, d = {url:a, protocol:"http", host:"", path:"", d:new Ja, anchor:""};
        if (!a)return d;
        c = a[q]("://");
        0 <= c && (d.protocol = a[B](0, c), a = a[B](c + 3));
        c = a[ua]("/|\\?|#");
        if (0 <= c)d.host = a[B](0, c)[D](), a = a[B](c); else return d.host = a[D](), d;
        c = a[q]("#");
        0 <= c && (d.anchor = a[B](c + 1), a = a[B](0, c));
        c = a[q]("?");
        0 <= c && (Ma(d.d, a[B](c + 1)), a = a[B](0, c));
        d.anchor && b && Ma(d.d, d.anchor);
        a && "/" == a[la](0) && (a = a[B](1));
        d.path = a;
        return d
    }

    function Na(a, b) {
        function c(a) {
            var b = (a.hostname || "")[y](":")[0][D](), c = (a[A] || "")[D](), c = 1 * a[oa] || ("http:" == c ? 80 : "https:" == c ? 443 : ""), a = a.pathname || "";
            0 == a[q]("/") || (a = "/" + a);
            return[b, "" + c, a]
        }

        var d = b || J[pa]("a");
        d.href = J[z][wa];
        var e = (d[A] || "")[D](), f = c(d), j = d[ua] || "", m = e + "//" + f[0] + (f[1] ? ":" + f[1] : "");
        0 == a[q]("//") ? a = e + a : 0 == a[q]("/") ? a = m + a : !a || 0 == a[q]("?") ? a = m + f[2] + (a || j) : 0 > a[y]("/")[0][q](":") && (a = m + f[2][B](0, f[2].lastIndexOf("/")) + "/" + a);
        d.href = a;
        e = c(d);
        return{protocol:(d[A] || "")[D](), host:e[0],
            port:e[1], path:e[2], Pa:d[ua] || "", url:a || ""}
    }

    function Ma(a, b) {
        function c(b, c) {
            a.contains(b) || a.set(b, []);
            a.get(b)[n](c)
        }

        for (var d = Ca(b)[y]("&"), e = 0; e < d[w]; e++)if (d[e]) {
            var f = d[e][q]("=");
            0 > f ? c(d[e], "1") : c(d[e][B](0, f), d[e][B](f + 1))
        }
    }

    function Oa(a, b) {
        if (F(a) || "[" == a[la](0) && "]" == a[la](a[w] - 1))return"-";
        var c = J.domain;
        return a[q](c + (b && "/" != b ? b : "")) == (0 == a[q]("http://") ? 7 : 0 == a[q]("https://") ? 8 : 0) ? "0" : a
    }

    ;
    var Pa = 0;

    function Qa(a, b, c) {
        !(1 <= Pa) && !(1 <= 100 * l.random()) && (a = ["utmt=error", "utmerr=" + a, "utmwv=5.3.6", "utmn=" + Da(), "utmsp=1"], b && a[n]("api=" + b), c && a[n]("msg=" + G(c[B](0, 100))), M.w && a[n]("aip=1"), Ra(a[C]("&")), Pa++)
    }

    ;
    var Sa = 0, Ta = {};

    function N(a) {
        return Ua("x" + Sa++, a)
    }

    function Ua(a, b) {
        Ta[a] = !!b;
        return a
    }

    var Wa = N(), Xa = N(), Ya = N(), Za = N(), $a = N(), O = N(), P = N(), ab = N(), bb = N(), cb = N(), db = N(), eb = N(), fb = N(), gb = N(), hb = N(), jb = N(), kb = N(), lb = N(), mb = N(), nb = N(), ob = N(), pb = N(), qb = N(), rb = N(), sb = N(), tb = N(), ub = N(), vb = N(), wb = N(), xb = N(), yb = N(), zb = N(), Ab = N(), Bb = N(), Cb = N(), Db = N(h), Eb = Ua("currencyCode"), Fb = Ua("page"), Gb = Ua("title"), Hb = N(), Ib = N(), Jb = N(), Kb = N(), Lb = N(), Mb = N(), Nb = N(), Ob = N(), Pb = N(), Q = N(h), Qb = N(h), Rb = N(h), Sb = N(h), Tb = N(h), Ub = N(h), Vb = N(h), Xb = N(h), Yb = N(h), Zb = N(h), $b = N(h), R = N(h), ac = N(h), bc = N(h), cc = N(h), dc = N(h), ec = N(h),
        fc = N(h), gc = N(h), S = N(h), hc = N(h), ic = N(h), jc = N(h), kc = N(h), lc = N(h), mc = N(h), nc = N(h), oc = Ua("campaignParams"), pc = N(), qc = Ua("hitCallback"), rc = N();
    N();
    var sc = N(), tc = N(), uc = N(), vc = N(), wc = N(), xc = N(), yc = N(), zc = N(), Ac = N(), Bc = N(), Cc = N(), Dc = N();
    N();
    var Ec = N(), Fc = N(), Gc = N(), Hc = N();

    function Lc(a) {
        var b = this.plugins_;
        if (b)return b.get(a)
    }

    var T = function (a, b, c, d) {
        a[b] = function () {
            try {
                return d != g && H(d), c[xa](this, arguments)
            } catch (a) {
                throw Qa("exc", b, a && a[r]), a;
            }
        }
    }, Mc = function (a, b, c, d) {
        U[x][a] = function () {
            try {
                return H(c), za(this.a.get(b), d)
            } catch (e) {
                throw Qa("exc", a, e && e[r]), e;
            }
        }
    }, V = function (a, b, c, d, e) {
        U[x][a] = function (f) {
            try {
                H(c), e == g ? this.a.set(b, za(f, d)) : this.a.set(b, e)
            } catch (j) {
                throw Qa("exc", a, j && j[r]), j;
            }
        }
    };
    var Nc = RegExp(/(^|\.)doubleclick\.net$/i), Oc = function (a, b) {
        return Nc[ha](J[z].hostname) ? h : "/" !== b ? k : (0 == a[q]("www.google.") || 0 == a[q](".google.") || 0 == a[q]("google.")) && !(-1 < a[q]("google.org")) ? h : k
    }, Pc = function (a) {
        var b = a.get($a), c = a.c(P, "/");
        Oc(b, c) && a[sa]()
    };
    var Vc = function () {
        var a = {}, b = {}, c = new Qc;
        this.g = function (a, b) {
            c.add(a, b)
        };
        var d = new Qc;
        this.e = function (a, b) {
            d.add(a, b)
        };
        var e = k, f = k, j = h;
        this.U = function () {
            e = h
        };
        this.j = function (a) {
            this[ja]();
            this.set(pc, a, h);
            a = new Rc(this);
            e = k;
            d.execute(this);
            e = h;
            b = {};
            this.n();
            a.Ka()
        };
        this.load = function () {
            e && (e = k, this.La(), Sc(this), f || (f = h, c.execute(this), Tc(this), Sc(this)), e = h)
        };
        this.n = function () {
            if (e)if (f)e = k, Tc(this), e = h; else this[ja]()
        };
        this.get = function (c) {
            Ta[c] && this[ja]();
            return b[c] !== g ? b[c] : a[c]
        };
        this.set =
            function (c, d, e) {
                Ta[c] && this[ja]();
                e ? b[c] = d : a[c] = d;
                Ta[c] && this.n()
            };
        this.z = function (b) {
            a[b] = this.b(b, 0) + 1
        };
        this.b = function (a, b) {
            var c = this.get(a);
            return c == g || "" === c ? b : 1 * c
        };
        this.c = function (a, b) {
            var c = this.get(a);
            return c == g ? b : c + ""
        };
        this.La = function () {
            if (j) {
                var b = this.c($a, ""), c = this.c(P, "/");
                Oc(b, c) || (a[O] = a[fb] && "" != b ? Uc(b) : 1, j = k)
            }
        }
    };
    Vc[x].stopPropagation = function () {
        throw"aborted";
    };
    var Rc = function (a) {
        var b = this;
        this.q = 0;
        var c = a.get(qc);
        this.Va = function () {
            0 < b.q && c && (b.q--, b.q || c())
        };
        this.Ka = function () {
            !b.q && c && ca(c, 10)
        };
        a.set(rc, b, h)
    };

    function Wc(a, b) {
        for (var b = b || [], c = 0; c < b[w]; c++) {
            var d = b[c];
            if ("" + a == d || 0 == d[q](a + "."))return d
        }
        return"-"
    }

    var Yc = function (a, b, c) {
        c = c ? "" : a.c(O, "1");
        b = b[y](".");
        if (6 !== b[w] || Xc(b[0], c))return k;
        var c = 1 * b[1], d = 1 * b[2], e = 1 * b[3], f = 1 * b[4], b = 1 * b[5];
        if (!(0 <= c && 0 < d && 0 < e && 0 < f && 0 <= b))return H(110), k;
        a.set(Q, c);
        a.set(Tb, d);
        a.set(Ub, e);
        a.set(Vb, f);
        a.set(Xb, b);
        return h
    }, Zc = function (a) {
        var b = a.get(Q), c = a.get(Tb), d = a.get(Ub), e = a.get(Vb), f = a.b(Xb, 1);
        b == g ? H(113) : NaN == b && H(114);
        0 <= b && 0 < c && 0 < d && 0 < e && 0 <= f || H(115);
        return[a.b(O, 1), b != g ? b : "-", c || "-", d || "-", e || "-", f][C](".")
    }, $c = function (a) {
        return[a.b(O, 1), a.b($b, 0), a.b(R, 1),
            a.b(ac, 0)][C](".")
    }, ad = function (a, b, c) {
        var c = c ? "" : a.c(O, "1"), d = b[y](".");
        if (4 !== d[w] || Xc(d[0], c))d = i;
        a.set($b, d ? 1 * d[1] : 0);
        a.set(R, d ? 1 * d[2] : 10);
        a.set(ac, d ? 1 * d[3] : a.get(Za));
        return d != i || !Xc(b, c)
    }, bd = function (a, b) {
        var c = G(a.c(Rb, "")), d = [], e = a.get(Db);
        if (!b && e) {
            for (var f = 0; f < e[w]; f++) {
                var j = e[f];
                j && 1 == j[ta] && d[n](f + "=" + G(j[r]) + "=" + G(j[ma]) + "=1")
            }
            0 < d[w] && (c += "|" + d[C]("^"))
        }
        return c ? a.b(O, 1) + "." + c : i
    }, cd = function (a, b, c) {
        c = c ? "" : a.c(O, "1");
        b = b[y](".");
        if (2 > b[w] || Xc(b[0], c))return k;
        b = b[ia](1)[C](".")[y]("|");
        0 < b[w] && a.set(Rb, I(b[0]));
        if (1 >= b[w])return h;
        b = b[1][y](-1 == b[1][q](",") ? "^" : ",");
        for (c = 0; c < b[w]; c++) {
            var d = b[c][y]("=");
            if (4 == d[w]) {
                var e = {};
                ea(e, I(d[1]));
                e.value = I(d[2]);
                e.scope = 1;
                a.get(Db)[d[0]] = e
            }
        }
        return h
    }, dd = function (a) {
        var b;
        b = function (b, e) {
            if (!F(a.get(b))) {
                var f = a.c(b, ""), f = f[y](" ")[C]("%20"), f = f[y]("+")[C]("%20");
                c[n](e + "=" + f)
            }
        };
        var c = [];
        b(fc, "utmcid");
        b(kc, "utmcsr");
        b(S, "utmgclid");
        b(hc, "utmgclsrc");
        b(ic, "utmdclid");
        b(jc, "utmdsid");
        b(gc, "utmccn");
        b(lc, "utmcmd");
        b(mc, "utmctr");
        b(nc, "utmcct");
        return(b = c[C]("|")) ? [a.b(O, 1), a.b(bc, 0), a.b(cc, 1), a.b(dc, 1), b][C](".") : ""
    }, ed = function (a, b, c) {
        c = c ? "" : a.c(O, "1");
        b = b[y](".");
        if (5 > b[w] || Xc(b[0], c))return a.set(bc, g), a.set(cc, g), a.set(dc, g), a.set(fc, g), a.set(gc, g), a.set(kc, g), a.set(lc, g), a.set(mc, g), a.set(nc, g), a.set(S, g), a.set(hc, g), a.set(ic, g), a.set(jc, g), k;
        a.set(bc, 1 * b[1]);
        a.set(cc, 1 * b[2]);
        a.set(dc, 1 * b[3]);
        var d = b[ia](4)[C]("."), b = function (a) {
            return(a = d[na](a + "=(.*?)(?:\\|utm|$)")) && 2 == a[w] ? a[1] : g
        }, c = function (b, c) {
            c && (c = e ? I(c) : c[y]("%20")[C](" "),
                a.set(b, c))
        };
        -1 == d[q]("=") && (d = I(d));
        var e = "2" == b("utmcvr");
        c(fc, b("utmcid"));
        c(gc, b("utmccn"));
        c(kc, b("utmcsr"));
        c(lc, b("utmcmd"));
        c(mc, b("utmctr"));
        c(nc, b("utmcct"));
        c(S, b("utmgclid"));
        c(hc, b("utmgclsrc"));
        c(ic, b("utmdclid"));
        c(jc, b("utmdsid"));
        return h
    }, Xc = function (a, b) {
        return b ? a != b : !/^\d+$/[ha](a)
    };
    var Qc = function () {
        this.B = []
    };
    Qc[x].add = function (a, b) {
        this.B[n]({name:a, s:b})
    };
    Qc[x].execute = function (a) {
        try {
            for (var b = 0; b < this.B[w]; b++)this.B[b].s.call(W, a)
        } catch (c) {
        }
    };
    function fd(a) {
        100 != a.get(tb) && a.get(Q) % 1E4 >= 100 * a.get(tb) && a[sa]()
    }

    function gd(a) {
        hd(a.get(Wa)) && a[sa]()
    }

    function id(a) {
        "file:" == J[z][A] && a[sa]()
    }

    function jd(a) {
        a.get(Gb) || a.set(Gb, J.title, h);
        a.get(Fb) || a.set(Fb, J[z].pathname + J[z][ua], h)
    }

    ;
    var kd = new function () {
        var a = [];
        this.set = function (b) {
            a[b] = h
        };
        this.Ya = function () {
            for (var b = [], c = 0; c < a[w]; c++)a[c] && (b[l[ka](c / 6)] = b[l[ka](c / 6)] ^ 1 << c % 6);
            for (c = 0; c < b[w]; c++)b[c] = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_"[la](b[c] || 0);
            return b[C]("") + "~"
        }
    };

    function H(a) {
        kd.set(a)
    }

    ;
    var W = window, J = document, hd = function (a) {
        var b = W._gaUserPrefs;
        return b && b.ioo && b.ioo() || !!a && W["ga-disable-" + a] === h
    }, ld = function (a) {
        for (var b = [], c = J.cookie[y](";"), a = RegExp("^\\s*" + a + "=\\s*(.*?)\\s*$"), d = 0; d < c[w]; d++) {
            var e = c[d][na](a);
            e && b[n](e[1])
        }
        return b
    }, X = function (a, b, c, d, e, f) {
        e = hd(e) ? k : Oc(d, c) ? k : h;
        if (e) {
            if (b && 0 <= W[ya].userAgent[q]("Firefox"))for (var b = b[p](/\n|\r/g, " "), e = 0, j = b[w]; e < j; ++e) {
                var m = b.charCodeAt(e) & 255;
                if (10 == m || 13 == m)b = b[B](0, e) + "?" + b[B](e + 1)
            }
            b && 2E3 < b[w] && (b = b[B](0, 2E3), H(69));
            a = a + "=" + b + "; path=" + c + "; ";
            f && (a += "expires=" + (new Date((new Date).getTime() + f)).toGMTString() + "; ");
            d && (a += "domain=" + d + ";");
            J.cookie = a
        }
    };
    var md, nd, od = function () {
        if (!md) {
            var a = {}, b = W[ya], c = W.screen;
            a.R = c ? c.width + "x" + c.height : "-";
            a.Q = c ? c.colorDepth + "-bit" : "-";
            a.language = (b && (b.language || b.browserLanguage) || "-")[D]();
            a.javaEnabled = b && b.javaEnabled() ? 1 : 0;
            a.characterSet = J.characterSet || J.charset || "-";
            try {
                var d = J.documentElement, e = J.body, f = e && e[ra] && e[va], b = [];
                d && (d[ra] && d[va]) && ("CSS1Compat" === J.compatMode || !f) ? b = [d[ra], d[va]] : f && (b = [e[ra], e[va]]);
                a.Xa = b[C]("x")
            } catch (j) {
                H(135)
            }
            md = a
        }
    }, pd = function () {
        od();
        for (var a = md, b = W[ya], a = b.appName +
            b.version + a.language + b.platform + b.userAgent + a.javaEnabled + a.R + a.Q + (J.cookie ? J.cookie : "") + (J.referrer ? J.referrer : ""), b = a[w], c = W.history[w]; 0 < c;)a += c-- ^ b++;
        return Uc(a)
    }, qd = function (a) {
        od();
        var b = md;
        a.set(Jb, b.R);
        a.set(Kb, b.Q);
        a.set(Nb, b.language);
        a.set(Ob, b.characterSet);
        a.set(Lb, b.javaEnabled);
        a.set(Pb, b.Xa);
        if (a.get(gb) && a.get(hb)) {
            if (!(b = nd)) {
                var c, d, e;
                d = "ShockwaveFlash";
                if ((b = (b = W[ya]) ? b.plugins : g) && 0 < b[w])for (c = 0; c < b[w] && !e; c++)d = b[c], -1 < d[r][q]("Shockwave Flash") && (e = d.description[y]("Shockwave Flash ")[1]);
                else {
                    d = d + "." + d;
                    try {
                        c = new ActiveXObject(d + ".7"), e = c.GetVariable("$version")
                    } catch (f) {
                    }
                    if (!e)try {
                        c = new ActiveXObject(d + ".6"), e = "WIN 6,0,21,0", c.AllowScriptAccess = "always", e = c.GetVariable("$version")
                    } catch (j) {
                    }
                    if (!e)try {
                        c = new ActiveXObject(d), e = c.GetVariable("$version")
                    } catch (m) {
                    }
                    e && (e = e[y](" ")[1][y](","), e = e[0] + "." + e[1] + " r" + e[2])
                }
                b = e ? e : "-"
            }
            nd = b;
            a.set(Mb, nd)
        } else a.set(Mb, "-")
    };
    var rd = function (a) {
        if (Aa(a))this.s = a; else {
            var b = a[0], c = b.lastIndexOf(":"), d = b.lastIndexOf(".");
            this.h = this.i = this.l = "";
            -1 == c && -1 == d ? this.h = b : -1 == c && -1 != d ? (this.i = b[B](0, d), this.h = b[B](d + 1)) : -1 != c && -1 == d ? (this.l = b[B](0, c), this.h = b[B](c + 1)) : c > d ? (this.i = b[B](0, d), this.l = b[B](d + 1, c), this.h = b[B](c + 1)) : (this.i = b[B](0, d), this.h = b[B](d + 1));
            this.k = a[ia](1);
            this.Na = !this.l && "_require" == this.h;
            this.K = !this.i && !this.l && "_provide" == this.h
        }
    }, Y = function () {
        T(Y[x], "push", Y[x][n], 5);
        T(Y[x], "_getPlugin", Lc, 121);
        T(Y[x],
            "_createAsyncTracker", Y[x].Ta, 33);
        T(Y[x], "_getAsyncTracker", Y[x].Ua, 34);
        this.J = new Ja;
        this.p = []
    };
    E = Y[x];
    E.Oa = function (a, b, c) {
        var d = this.J.get(a);
        if (!Aa(d))return k;
        b.plugins_ = b.plugins_ || new Ja;
        b.plugins_.set(a, new d(b, c || {}));
        return h
    };
    E.push = function (a) {
        var b = Z.Wa[xa](this, arguments), b = Z.p.concat(b);
        for (Z.p = []; 0 < b[w] && !Z.P(b[0]) && !(b.shift(), 0 < Z.p[w]););
        Z.p = Z.p.concat(b);
        return 0
    };
    E.Wa = function (a) {
        for (var b = [], c = 0; c < arguments[w]; c++)try {
            var d = new rd(arguments[c]);
            d.K ? this.P(d) : b[n](d)
        } catch (e) {
        }
        return b
    };
    E.P = function (a) {
        try {
            if (a.s)a.s[xa](W); else if (a.K)this.J.set(a.k[0], a.k[1]); else {
                var b = "_gat" == a.i ? M : "_gaq" == a.i ? Z : M.u(a.i);
                if (a.Na) {
                    if (!this.Oa(a.k[0], b, a.k[2])) {
                        if (!a.Qa) {
                            var c = Na("" + a.k[1]);
                            var d = c[A], e = J[z][A];
                            var f;
                            if (f = "https:" == d || d == e ? h : "http:" != d ? k : "http:" == e) {
                                var j;
                                a:{
                                    var m = Na(J[z][wa]);
                                    if (!(c.Pa || 0 <= c.url[q]("?") || 0 <= c[qa][q]("://") || c[u] == m[u] && c[oa] == m[oa]))for (var s = "http:" == c[A] ? 80 : 443, t = M.T, b = 0; b < t[w]; b++)if (c[u] == t[b][0] && (c[oa] || s) == (t[b][1] || s) && 0 == c[qa][q](t[b][2])) {
                                        j = h;
                                        break a
                                    }
                                    j =
                                        k
                                }
                                f = j && !hd()
                            }
                            f && (a.Qa = Ha(c.url))
                        }
                        return h
                    }
                } else a.l && (b = b.plugins_.get(a.l)), b[a.h][xa](b, a.k)
            }
        } catch (Va) {
        }
    };
    E.Ta = function (a, b) {
        return M.r(a, b || "")
    };
    E.Ua = function (a) {
        return M.u(a)
    };
    var ud = function () {
        function a(a, b, c, d) {
            g == f[a] && (f[a] = {});
            g == f[a][b] && (f[a][b] = []);
            f[a][b][c] = d
        }

        function b(a, b, c) {
            if (g != f[a] && g != f[a][b])return f[a][b][c]
        }

        function c(a, b) {
            if (g != f[a] && g != f[a][b]) {
                f[a][b] = g;
                var c = h, d;
                for (d = 0; d < j[w]; d++)if (g != f[a][j[d]]) {
                    c = k;
                    break
                }
                c && (f[a] = g)
            }
        }

        function d(a) {
            var b = "", c = k, d, e;
            for (d = 0; d < j[w]; d++)if (e = a[j[d]], g != e) {
                c && (b += j[d]);
                for (var c = [], f = g, ga = g, ga = 0; ga < e[w]; ga++)if (g != e[ga]) {
                    f = "";
                    ga != ib && g == e[ga - 1] && (f += ga[v]() + Va);
                    for (var Bd = e[ga], Ic = "", Wb = g, Jc = g, Kc = g, Wb = 0; Wb < Bd[w]; Wb++)Jc =
                        Bd[la](Wb), Kc = Ia[Jc], Ic += g != Kc ? Kc : Jc;
                    f += Ic;
                    c[n](f)
                }
                b += m + c[C](t) + s;
                c = k
            } else c = h;
            return b
        }

        var e = this, f = [], j = ["k", "v"], m = "(", s = ")", t = "*", Va = "!", Ia = {"'":"'0"};
        Ia[s] = "'1";
        Ia[t] = "'2";
        Ia[Va] = "'3";
        var ib = 1;
        e.Sa = function (a) {
            return g != f[a]
        };
        e.A = function () {
            for (var a = "", b = 0; b < f[w]; b++)g != f[b] && (a += b[v]() + d(f[b]));
            return a
        };
        e.Ra = function (a) {
            if (a == g)return e.A();
            for (var b = a.A(), c = 0; c < f[w]; c++)g != f[c] && !a.Sa(c) && (b += c[v]() + d(f[c]));
            return b
        };
        e.f = function (b, c, d) {
            if (!sd(d))return k;
            a(b, "k", c, d);
            return h
        };
        e.o = function (b, c, d) {
            if (!td(d))return k;
            a(b, "v", c, d[v]());
            return h
        };
        e.getKey = function (a, c) {
            return b(a, "k", c)
        };
        e.O = function (a, c) {
            return b(a, "v", c)
        };
        e.M = function (a) {
            c(a, "k")
        };
        e.N = function (a) {
            c(a, "v")
        };
        T(e, "_setKey", e.f, 89);
        T(e, "_setValue", e.o, 90);
        T(e, "_getKey", e.getKey, 87);
        T(e, "_getValue", e.O, 88);
        T(e, "_clearKey", e.M, 85);
        T(e, "_clearValue", e.N, 86)
    };

    function sd(a) {
        return"string" == typeof a
    }

    function td(a) {
        return"number" != typeof a && (g == Number || !(a instanceof Number)) || l.round(a) != a || NaN == a || a == ba ? k : h
    }

    ;
    var vd = function (a) {
        var b = W.gaGlobal;
        a && !b && (W.gaGlobal = b = {});
        return b
    }, wd = function () {
        var a = vd(h).hid;
        a == i && (a = Da(), vd(h).hid = a);
        return a
    }, xd = function (a) {
        a.set(Ib, wd());
        var b = vd();
        if (b && b.dh == a.get(O)) {
            var c = b.sid;
            c && ("0" == c && H(112), a.set(Vb, c), a.get(Qb) && a.set(Ub, c));
            b = b.vid;
            a.get(Qb) && b && (b = b[y]("."), 1 * b[1] || H(112), a.set(Q, 1 * b[0]), a.set(Tb, 1 * b[1]))
        }
    };
    var yd, Cd = function (a, b, c) {
        var d = a.c($a, ""), e = a.c(P, "/"), f = a.b(ab, 0), a = a.c(Wa, "");
        X(b, c, e, d, a, f)
    }, Tc = function (a) {
        var b = a.c($a, "");
        a.b(O, 1);
        var c = a.c(P, "/"), d = a.c(Wa, "");
        X("__utma", Zc(a), c, b, d, a.get(ab));
        X("__utmb", $c(a), c, b, d, a.get(bb));
        X("__utmc", "" + a.b(O, 1), c, b, d);
        var e = dd(a, h);
        e ? X("__utmz", e, c, b, d, a.get(cb)) : X("__utmz", "", c, b, "", -1);
        (e = bd(a, k)) ? X("__utmv", e, c, b, d, a.get(ab)) : X("__utmv", "", c, b, "", -1)
    }, Sc = function (a) {
        var b = a.b(O, 1);
        if (!Yc(a, Wc(b, ld("__utma"))))return a.set(Sb, h), k;
        var c = !ad(a, Wc(b,
            ld("__utmb")));
        a.set(Zb, c);
        ed(a, Wc(b, ld("__utmz")));
        cd(a, Wc(b, ld("__utmv")));
        yd = !c;
        return h
    }, Dd = function (a) {
        !yd && !(0 < ld("__utmb")[w]) && (X("__utmd", "1", a.c(P, "/"), a.c($a, ""), a.c(Wa, ""), 1E4), 0 == ld("__utmd")[w] && a[sa]())
    };
    var Gd = function (a) {
        a.get(Q) == g ? Ed(a) : a.get(Sb) && !a.get(Ec) ? Ed(a) : a.get(Zb) && Fd(a)
    }, Hd = function (a) {
        a.get(ec) && !a.get(Yb) && (Fd(a), a.set(cc, a.get(Xb)))
    }, Ed = function (a) {
        var b = a.get(Za);
        a.set(Qb, h);
        a.set(Q, Da() ^ pd(a) & 2147483647);
        a.set(Rb, "");
        a.set(Tb, b);
        a.set(Ub, b);
        a.set(Vb, b);
        a.set(Xb, 1);
        a.set(Yb, h);
        a.set($b, 0);
        a.set(R, 10);
        a.set(ac, b);
        a.set(Db, []);
        a.set(Sb, k);
        a.set(Zb, k)
    }, Fd = function (a) {
        a.set(Ub, a.get(Vb));
        a.set(Vb, a.get(Za));
        a.z(Xb);
        a.set(Yb, h);
        a.set($b, 0);
        a.set(R, 10);
        a.set(ac, a.get(Za));
        a.set(Zb, k)
    };
    var Id = "daum:q eniro:search_word naver:query pchome:q images.google:q google:q yahoo:p yahoo:q msn:q bing:q aol:query aol:q lycos:q lycos:query ask:q netscape:query cnn:query about:terms mamma:q voila:rdata virgilio:qs live:q baidu:wd alice:qs yandex:text najdi:q seznam:q rakuten:qt biglobe:q goo.ne:MT wp:szukaj onet:qt yam:k kvasir:q ozu:q terra:query rambler:query conduit:q babylon:q search-results:q avg:q comcast:q incredimail:q startsiden:q go.mail.ru:q search.centrum.cz:q".split(" "), Pd = function (a) {
        if (a.get(jb) &&
            !a.get(Ec)) {
            for (var b = !F(a.get(fc)) || !F(a.get(kc)) || !F(a.get(S)) || !F(a.get(ic)), c = {}, d = 0; d < Jd[w]; d++) {
                var e = Jd[d];
                c[e] = a.get(e)
            }
            (d = a.get(oc)) ? (H(149), e = new Ja, Ma(e, d), d = e) : d = La(J[z][wa], a.get(eb)).d;
            if (!("1" == L(d.get(a.get(sb))) && b)) {
                var f = d, j = function (b, c) {
                    var c = c || "-", d = L(f.get(a.get(b)));
                    return d && "-" != d ? I(d) : c
                }, d = L(f.get(a.get(lb))) || "-", e = L(f.get(a.get(ob))) || "-", m = L(f.get(a.get(nb))) || "-", s = L(f.get("gclsrc")) || "-", t = L(f.get("dclid")) || "-", Va = j(mb, "(not set)"), Ia = j(pb, "(not set)"), ib = j(qb), j =
                    j(rb);
                if (F(d) && F(m) && F(t) && F(e))d = k; else {
                    var zd = !F(t) && F(e), Ad = F(ib);
                    if (zd || Ad) {
                        var fa = Kd(a), fa = La(fa, h);
                        if ((fa = Ld(a, fa)) && !F(fa[1] && !fa[2]))zd && (e = fa[0]), Ad && (ib = fa[1])
                    }
                    Md(a, d, e, m, s, t, Va, Ia, ib, j);
                    d = h
                }
                d = d || Nd(a);
                !d && (!b && a.get(Yb)) && (Md(a, g, "(direct)", g, g, g, "(direct)", "(none)", g, g), d = h);
                if (d && (a.set(ec, Od(a, c)), b = "(direct)" == a.get(kc) && "(direct)" == a.get(gc) && "(none)" == a.get(lc), a.get(ec) || a.get(Yb) && !b))a.set(bc, a.get(Za)), a.set(cc, a.get(Xb)), a.z(dc)
            }
        }
    }, Nd = function (a) {
        var b = Kd(a), c = La(b, h);
        if (!(b !=
            g && b != i && "" != b && "0" != b && "-" != b && 0 <= b[q]("://")) || c && -1 < c[u][q]("google") && c.d.contains("q") && "cse" == c[qa])return k;
        if ((b = Ld(a, c)) && !b[2])return Md(a, g, b[0], g, g, g, "(organic)", "organic", b[1], g), h;
        if (b || !a.get(Yb))return k;
        a:{
            for (var b = a.get(zb), d = Ka(c[u]), e = 0; e < b[w]; ++e)if (-1 < d[q](b[e])) {
                a = k;
                break a
            }
            Md(a, g, d, g, g, g, "(referral)", "referral", g, "/" + c[qa]);
            a = h
        }
        return a
    }, Ld = function (a, b) {
        for (var c = a.get(xb), d = 0; d < c[w]; ++d) {
            var e = c[d][y](":");
            if (-1 < b[u][q](e[0][D]())) {
                var f = b.d.get(e[1]);
                if (f && (f = K(f), !f &&
                    -1 < b[u][q]("google.") && (f = "(not provided)"), !e[3] || -1 < b.url[q](e[3]))) {
                    a:{
                        for (var c = f, d = a.get(yb), c = I(c)[D](), j = 0; j < d[w]; ++j)if (c == d[j]) {
                            c = h;
                            break a
                        }
                        c = k
                    }
                    return[e[2] || e[0], f, c]
                }
            }
        }
        return i
    }, Md = function (a, b, c, d, e, f, j, m, s, t) {
        a.set(fc, b);
        a.set(kc, c);
        a.set(S, d);
        a.set(hc, e);
        a.set(ic, f);
        a.set(gc, j);
        a.set(lc, m);
        a.set(mc, s);
        a.set(nc, t)
    }, Jd = [gc, fc, S, ic, kc, lc, mc, nc], Od = function (a, b) {
        function c(a) {
            a = ("" + a)[y]("+")[C]("%20");
            return a = a[y](" ")[C]("%20")
        }

        function d(c) {
            var d = "" + (a.get(c) || ""), c = "" + (b[c] || "");
            return 0 <
                d[w] && d == c
        }

        if (d(S) || d(ic))return H(131), k;
        for (var e = 0; e < Jd[w]; e++) {
            var f = Jd[e], j = b[f] || "-", f = a.get(f) || "-";
            if (c(j) != c(f))return h
        }
        return k
    }, Qd = RegExp(/^https:\/\/(www\.)?google(\.com?)?(\.[a-z]{2}t?)?\/?$/i), Kd = function (a) {
        a = Oa(a.get(Hb), a.get(P));
        try {
            if (Qd[ha](a))return H(136), a + "?q="
        } catch (b) {
            H(145)
        }
        return a
    };
    var Rd, Sd, Td = function (a) {
        Rd = a.c(S, "");
        Sd = a.c(hc, "")
    }, Ud = function (a) {
        var b = a.c(S, ""), c = a.c(hc, "");
        b != Rd && (-1 < c[q]("ds") ? a.set(jc, g) : !F(Rd) && -1 < Sd[q]("ds") && a.set(jc, Rd))
    };
    var Wd = function (a) {
        Vd(a, J[z][wa]) ? (a.set(Ec, h), H(12)) : a.set(Ec, k)
    }, Vd = function (a, b) {
        if (!a.get(db))return k;
        var c = La(b, a.get(eb)), d = K(c.d.get("__utma")), e = K(c.d.get("__utmb")), f = K(c.d.get("__utmc")), j = K(c.d.get("__utmx")), m = K(c.d.get("__utmz")), s = K(c.d.get("__utmv")), c = K(c.d.get("__utmk"));
        if (Uc("" + d + e + f + j + m + s) != c) {
            d = I(d);
            e = I(e);
            f = I(f);
            j = I(j);
            f = Xd(d + e + f + j, m, s, c);
            if (!f)return k;
            m = f[0];
            s = f[1]
        }
        if (!Yc(a, d, h))return k;
        ad(a, e, h);
        ed(a, m, h);
        cd(a, s, h);
        Yd(a, j, h);
        return h
    }, $d = function (a, b, c) {
        var d;
        d = Zc(a) || "-";
        var e = $c(a) || "-", f = "" + a.b(O, 1) || "-", j = Zd(a) || "-", m = dd(a, k) || "-", a = bd(a, k) || "-", s = Uc("" + d + e + f + j + m + a), t = [];
        t[n]("__utma=" + d);
        t[n]("__utmb=" + e);
        t[n]("__utmc=" + f);
        t[n]("__utmx=" + j);
        t[n]("__utmz=" + m);
        t[n]("__utmv=" + a);
        t[n]("__utmk=" + s);
        d = t[C]("&");
        if (!d)return b;
        e = b[q]("#");
        if (c)return 0 > e ? b + "#" + d : b + "&" + d;
        c = "";
        f = b[q]("?");
        0 < e && (c = b[B](e), b = b[B](0, e));
        return 0 > f ? b + "?" + d + c : b + "&" + d + c
    }, Xd = function (a, b, c, d) {
        for (var e = 0; 3 > e; e++) {
            for (var f = 0; 3 > f; f++) {
                if (d == Uc(a + b + c))return H(127), [b, c];
                var j = b[p](/ /g, "%20"),
                    m = c[p](/ /g, "%20");
                if (d == Uc(a + j + m))return H(128), [j, m];
                j = j[p](/\+/g, "%20");
                m = m[p](/\+/g, "%20");
                if (d == Uc(a + j + m))return H(129), [j, m];
                try {
                    var s = b[na]("utmctr=(.*?)(?:\\|utm|$)");
                    if (s && 2 == s[w] && (j = b[p](s[1], G(I(s[1]))), d == Uc(a + j + c)))return H(139), [j, c]
                } catch (t) {
                }
                b = I(b)
            }
            c = I(c)
        }
    };
    var ae = "|", ce = function (a, b, c, d, e, f, j, m, s) {
        var t = be(a, b);
        t || (t = {}, a.get(Ab)[n](t));
        t.id_ = b;
        t.affiliation_ = c;
        t.total_ = d;
        t.tax_ = e;
        t.shipping_ = f;
        t.city_ = j;
        t.state_ = m;
        t.country_ = s;
        t.items_ = t.items_ || [];
        return t
    }, de = function (a, b, c, d, e, f, j) {
        var a = be(a, b) || ce(a, b, "", 0, 0, 0, "", "", ""), m;
        a:{
            if (a && a.items_) {
                m = a.items_;
                for (var s = 0; s < m[w]; s++)if (m[s].sku_ == c) {
                    m = m[s];
                    break a
                }
            }
            m = i
        }
        s = m || {};
        s.transId_ = b;
        s.sku_ = c;
        s.name_ = d;
        s.category_ = e;
        s.price_ = f;
        s.quantity_ = j;
        m || a.items_[n](s);
        return s
    }, be = function (a, b) {
        for (var c =
            a.get(Ab), d = 0; d < c[w]; d++)if (c[d].id_ == b)return c[d];
        return i
    };
    var ee, fe = function (a) {
        if (!ee) {
            var b;
            b = J[z].hash;
            var c = W[r], d = /^#?gaso=([^&]*)/;
            if (c = (b = (b = b && b[na](d) || c && c[na](d)) ? b[1] : K(ld("GASO"))) && b[na](/^(?:[|!]([-0-9a-z.]{1,40})[|!])?([-.\w]{10,1200})$/i))Cd(a, "GASO", "" + b), M._gasoDomain = a.get($a), M._gasoCPath = a.get(P), a = c[1], Ha("https://www.google.com/analytics/web/inpage/pub/inpage.js?" + (a ? "prefix=" + a + "&" : "") + Da(), "_gasojs");
            ee = h
        }
    };
    var Yd = function (a, b, c) {
        c && (b = I(b));
        c = a.b(O, 1);
        b = b[y](".");
        !(2 > b[w]) && /^\d+$/[ha](b[0]) && (b[0] = "" + c, Cd(a, "__utmx", b[C](".")))
    }, Zd = function (a, b) {
        var c = Wc(a.get(O), ld("__utmx"));
        "-" == c && (c = "");
        return b ? G(c) : c
    };
    var he = function (a, b) {
        var c = l.min(a.b(Ac, 0), 100);
        if (a.b(Q, 0) % 100 >= c)return k;
        a:{
            if (c = (c = W.performance || W.webkitPerformance) && c.timing) {
                var d = c.navigationStart;
                if (0 == d)H(133); else {
                    c = [c.loadEventStart - d, c.domainLookupEnd - c.domainLookupStart, c.connectEnd - c.connectStart, c.responseStart - c.requestStart, c.responseEnd - c.responseStart, c.fetchStart - d, c.domInteractive - d, c.domContentLoadedEventStart - d];
                    break a
                }
            }
            c = g
        }
        c || (W.top != W ? c = g : (d = (c = W.external) && c.onloadT, c && !c.isValidLoadTime && (d = g), 2147483648 < d && (d = g),
            0 < d && c.setPageReadyTime(), c = d == g ? g : [d]));
        if (c == g)return k;
        d = c[0];
        if (d == g || d == ba || isNaN(d))return k;
        if (0 < d) {
            a:{
                for (d = 1; d < c[w]; d++)if (isNaN(c[d]) || c[d] == ba || 0 > c[d]) {
                    d = k;
                    break a
                }
                d = h
            }
            d ? b(ge(c)) : b(ge(c[ia](0, 1)))
        } else Fa(W, "load", function () {
            he(a, b)
        }, k);
        return h
    }, je = function (a, b, c, d) {
        var e = new ud;
        e.f(14, 90, b[B](0, 64));
        e.f(14, 91, a[B](0, 64));
        e.f(14, 92, "" + ie(c));
        d != g && e.f(14, 93, d[B](0, 64));
        e.o(14, 90, c);
        return e
    }, ie = function (a) {
        return isNaN(a) || 0 > a ? 0 : 5E3 > a ? 10 * l[ka](a / 10) : 5E4 > a ? 100 * l[ka](a / 100) : 41E5 > a ? 1E3 * l[ka](a /
            1E3) : 41E5
    }, ge = function (a) {
        for (var b = new ud, c = 0; c < a[w]; c++)b.f(14, c + 1, "" + ie(a[c])), b.o(14, c + 1, a[c]);
        return b
    };
    var U = function (a, b, c) {
        function d(a) {
            return function (b) {
                if ((b = b.get(Fc)[a]) && b[w])for (var c = {type:a, target:e, stopPropagation:function () {
                    throw"aborted";
                }}, d = 0; d < b[w]; d++)b[d].call(e, c)
            }
        }

        var e = this;
        this.a = new Vc;
        this.get = function (a) {
            return this.a.get(a)
        };
        this.set = function (a, b, c) {
            this.a.set(a, b, c)
        };
        this.set(Wa, b || "UA-XXXXX-X");
        this.set(Ya, a || "");
        this.set(Xa, c || "");
        this.set(Za, l.round((new Date).getTime() / 1E3));
        this.set(P, "/");
        this.set(ab, 63072E6);
        this.set(cb, 15768E6);
        this.set(bb, 18E5);
        this.set(db, k);
        this.set(wb, 50);
        this.set(eb, k);
        this.set(fb, h);
        this.set(gb, h);
        this.set(hb, h);
        this.set(jb, h);
        this.set(kb, h);
        this.set(mb, "utm_campaign");
        this.set(lb, "utm_id");
        this.set(nb, "gclid");
        this.set(ob, "utm_source");
        this.set(pb, "utm_medium");
        this.set(qb, "utm_term");
        this.set(rb, "utm_content");
        this.set(sb, "utm_nooverride");
        this.set(tb, 100);
        this.set(Ac, 1);
        this.set(Bc, k);
        this.set(ub, "/__utm.gif");
        this.set(vb, 1);
        this.set(Ab, []);
        this.set(Db, []);
        this.set(xb, Id[ia](0));
        this.set(yb, []);
        this.set(zb, []);
        this.C("auto");
        this.set(Hb,
            J.referrer);
        a = this.a;
        try {
            var f = La(J[z][wa], k), j = da(L(f.d.get("utm_referrer"))) || "";
            j && a.set(Hb, j);
            var m = da(K(f.d.get("utm_expid")));
            m && a.set(Hc, m)
        } catch (s) {
            H(146)
        }
        this.set(Fc, {hit:[], load:[]});
        this.a.g("0", Wd);
        this.a.g("1", Td);
        this.a.g("2", Gd);
        this.a.g("3", Pd);
        this.a.g("4", Ud);
        this.a.g("5", Hd);
        this.a.g("6", d("load"));
        this.a.g("7", fe);
        this.a.e("A", gd);
        this.a.e("B", id);
        this.a.e("C", Gd);
        this.a.e("D", fd);
        this.a.e("E", Pc);
        this.a.e("F", ke);
        this.a.e("G", Dd);
        this.a.e("H", jd);
        this.a.e("I", qd);
        this.a.e("J",
            xd);
        this.a.e("K", d("hit"));
        this.a.e("L", le);
        this.a.e("M", me);
        0 === this.get(Za) && H(111);
        this.a.U();
        this.I = g
    };
    E = U[x];
    E.m = function () {
        var a = this.get(Bb);
        a || (a = new ud, this.set(Bb, a));
        return a
    };
    E.Ma = function (a) {
        for (var b in a) {
            var c = a[b];
            a.hasOwnProperty(b) && this.set(b, c, h)
        }
    };
    E.L = function (a) {
        if (this.get(Bc))return k;
        var b = this, c = he(this.a, function (c) {
            b.set(Fb, a, h);
            b.t(c)
        });
        this.set(Bc, c);
        return c
    };
    E.Ga = function (a) {
        a && Ba(a) ? (H(13), this.set(Fb, a, h)) : "object" === typeof a && a !== i && this.Ma(a);
        this.I = a = this.get(Fb);
        if (1 >= 1E3 * l.random())try {
            var b = J[z];
            this.a.set(Gc, b.hash[w]);
            -1 != b.hash[ua](/utm_/) && H(137)
        } catch (c) {
            H(134)
        }
        this.a.j("page");
        this.L(a)
    };
    E.G = function (a, b, c, d, e) {
        if ("" == a || (!sd(a) || "" == b || !sd(b)) || c != g && !sd(c) || d != g && !td(d))return k;
        this.set(tc, a, h);
        this.set(uc, b, h);
        this.set(vc, c, h);
        this.set(wc, d, h);
        this.set(sc, !!e, h);
        this.a.j("event");
        return h
    };
    E.Ia = function (a, b, c, d, e) {
        var f = this.a.b(Ac, 0);
        1 * e === e && (f = e);
        if (this.a.b(Q, 0) % 100 >= f)return k;
        c = 1 * ("" + c);
        if ("" == a || (!sd(a) || "" == b || !sd(b) || !td(c) || isNaN(c) || 0 > c || 0 > f || 100 < f) || d != g && ("" == d || !sd(d)))return k;
        this.t(je(a, b, c, d));
        return h
    };
    E.Ha = function (a, b, c, d) {
        if (!a || !b)return k;
        this.set(xc, a, h);
        this.set(yc, b, h);
        this.set(zc, c || J[z][wa], h);
        d && this.set(Fb, d, h);
        this.a.j("social");
        return h
    };
    E.Fa = function () {
        this.set(Ac, 10);
        this.L(this.I)
    };
    E.Ja = function () {
        this.a.j("trans")
    };
    E.t = function (a) {
        this.set(Cb, a, h);
        this.a.j("event")
    };
    E.ja = function (a) {
        this.v();
        var b = this;
        return{_trackEvent:function (c, d, e) {
            H(91);
            b.G(a, c, d, e)
        }}
    };
    E.na = function (a) {
        return this.get(a)
    };
    E.ya = function (a, b) {
        if (a)if (Ba(a))this.set(a, b); else if ("object" == typeof a)for (var c in a)a.hasOwnProperty(c) && this.set(c, a[c])
    };
    E.addEventListener = function (a, b) {
        var c = this.get(Fc)[a];
        c && c[n](b)
    };
    E.removeEventListener = function (a, b) {
        for (var c = this.get(Fc)[a], d = 0; c && d < c[w]; d++)if (c[d] == b) {
            c.splice(d, 1);
            break
        }
    };
    E.ra = function () {
        return"5.3.6"
    };
    E.C = function (a) {
        this.get(fb);
        a = "auto" == a ? Ka(J.domain) : !a || "-" == a || "none" == a ? "" : a[D]();
        this.set($a, a)
    };
    E.wa = function (a) {
        this.set(fb, !!a)
    };
    E.oa = function (a, b) {
        return $d(this.a, a, b)
    };
    E.link = function (a, b) {
        if (this.a.get(db) && a) {
            var c = $d(this.a, a, b);
            J[z].href = c
        }
    };
    E.va = function (a, b) {
        this.a.get(db) && (a && a.action) && (a.action = $d(this.a, a.action, b))
    };
    E.Aa = function () {
        this.v();
        var a = this.a, b = J.getElementById ? J.getElementById("utmtrans") : J.utmform && J.utmform.utmtrans ? J.utmform.utmtrans : i;
        if (b && b[ma]) {
            a.set(Ab, []);
            for (var b = b[ma][y]("UTM:"), c = 0; c < b[w]; c++) {
                b[c] = Ca(b[c]);
                for (var d = b[c][y](ae), e = 0; e < d[w]; e++)d[e] = Ca(d[e]);
                "T" == d[0] ? ce(a, d[1], d[2], d[3], d[4], d[5], d[6], d[7], d[8]) : "I" == d[0] && de(a, d[1], d[2], d[3], d[4], d[5], d[6])
            }
        }
    };
    E.aa = function (a, b, c, d, e, f, j, m) {
        return ce(this.a, a, b, c, d, e, f, j, m)
    };
    E.Z = function (a, b, c, d, e, f) {
        return de(this.a, a, b, c, d, e, f)
    };
    E.Ba = function (a) {
        ae = a || "|"
    };
    E.fa = function () {
        this.set(Ab, [])
    };
    E.xa = function (a, b, c, d) {
        var e = this.a;
        if (0 >= a || a > e.get(wb))a = k; else if (!b || !c || 128 < b[w] + c[w])a = k; else {
            1 != d && 2 != d && (d = 3);
            var f = {};
            ea(f, b);
            f.value = c;
            f.scope = d;
            e.get(Db)[a] = f;
            a = h
        }
        a && this.a.n();
        return a
    };
    E.la = function (a) {
        this.a.get(Db)[a] = g;
        this.a.n()
    };
    E.sa = function (a) {
        return(a = this.a.get(Db)[a]) && 1 == a[ta] ? a[ma] : g
    };
    E.Da = function (a, b, c) {
        this.m().f(a, b, c)
    };
    E.Ea = function (a, b, c) {
        this.m().o(a, b, c)
    };
    E.ta = function (a, b) {
        return this.m().getKey(a, b)
    };
    E.ua = function (a, b) {
        return this.m().O(a, b)
    };
    E.ga = function (a) {
        this.m().M(a)
    };
    E.ha = function (a) {
        this.m().N(a)
    };
    E.ka = function () {
        return new ud
    };
    E.X = function (a) {
        a && this.get(yb)[n](a[D]())
    };
    E.ca = function () {
        this.set(yb, [])
    };
    E.Y = function (a) {
        a && this.get(zb)[n](a[D]())
    };
    E.da = function () {
        this.set(zb, [])
    };
    E.$ = function (a, b, c, d, e) {
        if (a && b) {
            a = [a, b[D]()][C](":");
            if (d || e)a = [a, d, e][C](":");
            d = this.get(xb);
            d.splice(c ? 0 : d[w], 0, a)
        }
    };
    E.ea = function () {
        this.set(xb, [])
    };
    E.ia = function (a) {
        this.a[ja]();
        var b = this.get(P), c = Zd(this.a);
        this.set(P, a);
        this.a.n();
        Yd(this.a, c);
        this.set(P, b)
    };
    E.za = function (a, b) {
        if (0 < a && 5 >= a && Ba(b) && "" != b) {
            var c = this.get(Cc) || [];
            c[a] = b;
            this.set(Cc, c)
        }
    };
    E.W = function (a) {
        a = "" + a;
        if (a[na](/^[A-Za-z0-9]{1,5}$/)) {
            var b = this.get(Dc) || [];
            b[n](a);
            this.set(Dc, b)
        }
    };
    E.v = function () {
        this.a[ja]()
    };
    E.Ca = function (a) {
        a && "" != a && (this.set(Rb, a), this.a.j("var"))
    };
    var ke = function (a) {
        "trans" !== a.get(pc) && 500 <= a.b($b, 0) && a[sa]();
        if ("event" === a.get(pc)) {
            var b = (new Date).getTime(), c = a.b(ac, 0), d = a.b(Vb, 0), c = l[ka](1 * ((b - (c != d ? c : 1E3 * c)) / 1E3));
            0 < c && (a.set(ac, b), a.set(R, l.min(10, a.b(R, 0) + c)));
            0 >= a.b(R, 0) && a[sa]()
        }
    }, me = function (a) {
        "event" === a.get(pc) && a.set(R, l.max(0, a.b(R, 10) - 1))
    };
    var ne = function () {
        var a = [];
        this.add = function (b, c, d) {
            d && (c = G("" + c));
            a[n](b + "=" + c)
        };
        this.toString = function () {
            return a[C]("&")
        }
    }, oe = function (a, b) {
        (b || 2 != a.get(vb)) && a.z($b)
    }, pe = function (a, b) {
        b.add("utmwv", "5.3.6");
        b.add("utms", a.get($b));
        b.add("utmn", Da());
        var c = J[z].hostname;
        F(c) || b.add("utmhn", c, h);
        c = a.get(tb);
        100 != c && b.add("utmsp", c, h)
    }, qe = function (a, b) {
        b.add("utmac", Ca(a.get(Wa)));
        a.get(Hc) && b.add("utmxkey", a.get(Hc), h);
        a.get(sc) && b.add("utmni", 1);
        var c = a.get(Dc);
        c && 0 < c[w] && b.add("utmdid", c[C]("."));
        var c = function (a, b) {
            b && d[n](a + "=" + b + ";")
        }, d = [];
        c("__utma", Zc(a));
        c("__utmz", dd(a, k));
        c("__utmv", bd(a, h));
        c("__utmx", Zd(a));
        b.add("utmcc", d[C]("+"), h);
        M.w && b.add("aip", 1);
        b.add("utmu", kd.Ya());
        a.get(Gc) != g && b.add("utmhlen", a.get(Gc), h)
    }, re = function (a, b) {
        for (var c = a.get(Cc) || [], d = [], e = 1; e < c[w]; e++)c[e] && d[n](e + ":" + G(c[e][p](/%/g, "%25")[p](/:/g, "%3A")[p](/,/g, "%2C")));
        d[w] && b.add("utmpg", d[C](","))
    }, se = function (a, b) {
        a.get(gb) && (b.add("utmcs", a.get(Ob), h), b.add("utmsr", a.get(Jb)), a.get(Pb) && b.add("utmvp",
            a.get(Pb)), b.add("utmsc", a.get(Kb)), b.add("utmul", a.get(Nb)), b.add("utmje", a.get(Lb)), b.add("utmfl", a.get(Mb), h))
    }, te = function (a, b) {
        a.get(kb) && a.get(Gb) && b.add("utmdt", a.get(Gb), h);
        b.add("utmhid", a.get(Ib));
        b.add("utmr", Oa(a.get(Hb), a.get(P)), h);
        b.add("utmp", G(a.get(Fb), h), h)
    }, ue = function (a, b) {
        for (var c = a.get(Bb), d = a.get(Cb), e = a.get(Db) || [], f = 0; f < e[w]; f++) {
            var j = e[f];
            j && (c || (c = new ud), c.f(8, f, j[r]), c.f(9, f, j[ma]), 3 != j[ta] && c.f(11, f, "" + j[ta]))
        }
        !F(a.get(tc)) && !F(a.get(uc), h) && (c || (c = new ud), c.f(5, 1,
            a.get(tc)), c.f(5, 2, a.get(uc)), e = a.get(vc), e != g && c.f(5, 3, e), e = a.get(wc), e != g && c.o(5, 1, e));
        c ? b.add("utme", c.Ra(d), h) : d && b.add("utme", d.A(), h)
    }, ve = function (a, b, c) {
        var d = new ne;
        oe(a, c);
        pe(a, d);
        d.add("utmt", "tran");
        d.add("utmtid", b.id_, h);
        d.add("utmtst", b.affiliation_, h);
        d.add("utmtto", b.total_, h);
        d.add("utmttx", b.tax_, h);
        d.add("utmtsp", b.shipping_, h);
        d.add("utmtci", b.city_, h);
        d.add("utmtrg", b.state_, h);
        d.add("utmtco", b.country_, h);
        ue(a, d);
        se(a, d);
        te(a, d);
        (b = a.get(Eb)) && d.add("utmcu", b, h);
        c || (re(a, d),
            qe(a, d));
        return d[v]()
    }, we = function (a, b, c) {
        var d = new ne;
        oe(a, c);
        pe(a, d);
        d.add("utmt", "item");
        d.add("utmtid", b.transId_, h);
        d.add("utmipc", b.sku_, h);
        d.add("utmipn", b.name_, h);
        d.add("utmiva", b.category_, h);
        d.add("utmipr", b.price_, h);
        d.add("utmiqt", b.quantity_, h);
        ue(a, d);
        se(a, d);
        te(a, d);
        (b = a.get(Eb)) && d.add("utmcu", b, h);
        c || (re(a, d), qe(a, d));
        return d[v]()
    }, xe = function (a, b) {
        var c = a.get(pc);
        if ("page" == c)c = new ne, oe(a, b), pe(a, c), ue(a, c), se(a, c), te(a, c), b || (re(a, c), qe(a, c)), c = [c[v]()]; else if ("event" == c)c =
            new ne, oe(a, b), pe(a, c), c.add("utmt", "event"), ue(a, c), se(a, c), te(a, c), b || (re(a, c), qe(a, c)), c = [c[v]()]; else if ("var" == c)c = new ne, oe(a, b), pe(a, c), c.add("utmt", "var"), !b && qe(a, c), c = [c[v]()]; else if ("trans" == c)for (var c = [], d = a.get(Ab), e = 0; e < d[w]; ++e) {
            c[n](ve(a, d[e], b));
            for (var f = d[e].items_, j = 0; j < f[w]; ++j)c[n](we(a, f[j], b))
        } else"social" == c ? b ? c = [] : (c = new ne, oe(a, b), pe(a, c), c.add("utmt", "social"), c.add("utmsn", a.get(xc), h), c.add("utmsa", a.get(yc), h), c.add("utmsid", a.get(zc), h), ue(a, c), se(a, c), te(a, c), re(a,
            c), qe(a, c), c = [c[v]()]) : c = [];
        return c
    }, le = function (a) {
        var b, c = a.get(vb), d = a.get(rc), e = d && d.Va, f = 0;
        if (0 == c || 2 == c) {
            var j = a.get(ub) + "?";
            b = xe(a, h);
            for (var m = 0, s = b[w]; m < s; m++)Ra(b[m], e, j, h), f++
        }
        if (1 == c || 2 == c) {
            b = xe(a);
            m = 0;
            for (s = b[w]; m < s; m++)try {
                Ra(b[m], e), f++
            } catch (t) {
                t && Qa(t[r], g, t.message)
            }
        }
        d && (d.q = f)
    };
    var ye = function () {
        return"https:" == J[z][A] || M.H ? "https://ssl.google-analytics.com" : "http://www.google-analytics.com"
    }, ze = function (a) {
        ea(this, "len");
        this.message = a + "-8192"
    }, Ae = function (a) {
        ea(this, "ff2post");
        this.message = a + "-2036"
    }, Ra = function (a, b, c, d) {
        b = b || Ea;
        if (d || 2036 >= a[w]) {
            var e = b, b = c || ye() + "/__utm.gif?", f = new Image(1, 1);
            f.src = b + a;
            f.onload = function () {
                f.onload = i;
                f.onerror = i;
                e()
            };
            f.onerror = function () {
                f.onload = i;
                f.onerror = i;
                e()
            }
        } else if (8192 >= a[w]) {
            var j = b;
            if (0 <= W[ya].userAgent[q]("Firefox") && ![].reduce)throw new Ae(a[w]);
            var m, b = ye() + "/p/__utm.gif";
            if (c = W.XDomainRequest)m = new c, m.open("POST", b); else if (c = W.XMLHttpRequest)c = new c, "withCredentials"in c && (m = c, m.open("POST", b, h), m.setRequestHeader("Content-Type", "text/plain"));
            m ? (m.onreadystatechange = function () {
                4 == m.readyState && (j(), m = i)
            }, m.send(a), b = h) : b = g;
            b || Be(a, j)
        } else throw new ze(a[w]);
    }, Be = function (a, b) {
        if (J.body) {
            a = aa(a);
            try {
                var c = J[pa]('<iframe name="' + a + '"></iframe>')
            } catch (d) {
                c = J[pa]("iframe"), ea(c, a)
            }
            c.height = "0";
            c.width = "0";
            c.style.display = "none";
            c.style.visibility =
                "hidden";
            var e = J[z], e = ye() + "/u/post_iframe.html#" + aa(e[A] + "//" + e[u] + "/favicon.ico"), f = function () {
                c.src = "";
                c.parentNode && c.parentNode.removeChild(c)
            };
            Fa(W, "beforeunload", f);
            var j = k, m = 0, s = function () {
                if (!j) {
                    try {
                        if (9 < m || c.contentWindow[z][u] == J[z][u]) {
                            j = h;
                            f();
                            Ga(W, "beforeunload", f);
                            b();
                            return
                        }
                    } catch (a) {
                    }
                    m++;
                    ca(s, 200)
                }
            };
            Fa(c, "load", s);
            J.body.appendChild(c);
            c.src = e
        } else ca(function () {
            Be(a, b)
        }, 100)
    };
    var $ = function () {
        this.H = this.w = k;
        this.D = {};
        this.F = [];
        this.V = 0;
        this.T = [
            ["www.google-analytics.com", "", "/plugins/"]
        ];
        this._gasoCPath = this._gasoDomain = g;
        var a = function (a, c, d) {
            T($[x], a, c, d)
        };
        a("_createTracker", $[x].r, 55);
        a("_getTracker", $[x].pa, 0);
        a("_getTrackerByName", $[x].u, 51);
        a("_getTrackers", $[x].qa, 130);
        a("_anonymizeIp", $[x].ba, 16);
        a("_forceSSL", $[x].ma, 125);
        a("_getPlugin", Lc, 120);
        a = function (a, c, d) {
            T(U[x], a, c, d)
        };
        Mc("_getName", Ya, 58);
        Mc("_getAccount", Wa, 64);
        Mc("_visitCode", Q, 54);
        Mc("_getClientInfo",
            gb, 53, 1);
        Mc("_getDetectTitle", kb, 56, 1);
        Mc("_getDetectFlash", hb, 65, 1);
        Mc("_getLocalGifPath", ub, 57);
        Mc("_getServiceMode", vb, 59);
        V("_setClientInfo", gb, 66, 2);
        V("_setAccount", Wa, 3);
        V("_setNamespace", Xa, 48);
        V("_setAllowLinker", db, 11, 2);
        V("_setDetectFlash", hb, 61, 2);
        V("_setDetectTitle", kb, 62, 2);
        V("_setLocalGifPath", ub, 46, 0);
        V("_setLocalServerMode", vb, 92, g, 0);
        V("_setRemoteServerMode", vb, 63, g, 1);
        V("_setLocalRemoteServerMode", vb, 47, g, 2);
        V("_setSampleRate", tb, 45, 1);
        V("_setCampaignTrack", jb, 36, 2);
        V("_setAllowAnchor",
            eb, 7, 2);
        V("_setCampNameKey", mb, 41);
        V("_setCampContentKey", rb, 38);
        V("_setCampIdKey", lb, 39);
        V("_setCampMediumKey", pb, 40);
        V("_setCampNOKey", sb, 42);
        V("_setCampSourceKey", ob, 43);
        V("_setCampTermKey", qb, 44);
        V("_setCampCIdKey", nb, 37);
        V("_setCookiePath", P, 9, 0);
        V("_setMaxCustomVariables", wb, 0, 1);
        V("_setVisitorCookieTimeout", ab, 28, 1);
        V("_setSessionCookieTimeout", bb, 26, 1);
        V("_setCampaignCookieTimeout", cb, 29, 1);
        V("_setReferrerOverride", Hb, 49);
        V("_setSiteSpeedSampleRate", Ac, 132);
        a("_trackPageview", U[x].Ga, 1);
        a("_trackEvent",
            U[x].G, 4);
        a("_trackPageLoadTime", U[x].Fa, 100);
        a("_trackSocial", U[x].Ha, 104);
        a("_trackTrans", U[x].Ja, 18);
        a("_sendXEvent", U[x].t, 78);
        a("_createEventTracker", U[x].ja, 74);
        a("_getVersion", U[x].ra, 60);
        a("_setDomainName", U[x].C, 6);
        a("_setAllowHash", U[x].wa, 8);
        a("_getLinkerUrl", U[x].oa, 52);
        a("_link", U[x].link, 101);
        a("_linkByPost", U[x].va, 102);
        a("_setTrans", U[x].Aa, 20);
        a("_addTrans", U[x].aa, 21);
        a("_addItem", U[x].Z, 19);
        a("_clearTrans", U[x].fa, 105);
        a("_setTransactionDelim", U[x].Ba, 82);
        a("_setCustomVar", U[x].xa,
            10);
        a("_deleteCustomVar", U[x].la, 35);
        a("_getVisitorCustomVar", U[x].sa, 50);
        a("_setXKey", U[x].Da, 83);
        a("_setXValue", U[x].Ea, 84);
        a("_getXKey", U[x].ta, 76);
        a("_getXValue", U[x].ua, 77);
        a("_clearXKey", U[x].ga, 72);
        a("_clearXValue", U[x].ha, 73);
        a("_createXObj", U[x].ka, 75);
        a("_addIgnoredOrganic", U[x].X, 15);
        a("_clearIgnoredOrganic", U[x].ca, 97);
        a("_addIgnoredRef", U[x].Y, 31);
        a("_clearIgnoredRef", U[x].da, 32);
        a("_addOrganic", U[x].$, 14);
        a("_clearOrganic", U[x].ea, 70);
        a("_cookiePathCopy", U[x].ia, 30);
        a("_get", U[x].na,
            106);
        a("_set", U[x].ya, 107);
        a("_addEventListener", U[x].addEventListener, 108);
        a("_removeEventListener", U[x].removeEventListener, 109);
        a("_addDevId", U[x].W);
        a("_getPlugin", Lc, 122);
        a("_setPageGroup", U[x].za, 126);
        a("_trackTiming", U[x].Ia, 124);
        a("_initData", U[x].v, 2);
        a("_setVar", U[x].Ca, 22);
        V("_setSessionTimeout", bb, 27, 3);
        V("_setCookieTimeout", cb, 25, 3);
        V("_setCookiePersistence", ab, 24, 1);
        a("_setAutoTrackOutbound", Ea, 79);
        a("_setTrackOutboundSubdomains", Ea, 81);
        a("_setHrefExamineLimit", Ea, 80)
    };
    E = $[x];
    E.pa = function (a, b) {
        return this.r(a, g, b)
    };
    E.r = function (a, b, c) {
        b && H(23);
        c && H(67);
        b == g && (b = "~" + M.V++);
        a = new U(b, a, c);
        M.D[b] = a;
        M.F[n](a);
        return a
    };
    E.u = function (a) {
        a = a || "";
        return M.D[a] || M.r(g, a)
    };
    E.qa = function () {
        return M.F[ia](0)
    };
    E.ba = function () {
        this.w = h
    };
    E.ma = function () {
        this.H = h
    };
    var Ce = function (a) {
        if ("prerender" == J.webkitVisibilityState)return k;
        a();
        return h
    };
    var M = new $;
    var De = W._gat;
    De && Aa(De._getTracker) ? M = De : W._gat = M;
    var Z = new Y;
    var Ee = function () {
        var a = W._gaq, b = k;
        if (a && Aa(a[n]) && (b = "[object Array]" == Object[x][v].call(Object(a)), !b)) {
            Z = a;
            return
        }
        W._gaq = Z;
        b && Z[n][xa](Z, a)
    };
    if (!Ce(Ee)) {
        H(123);
        var Fe = k, Ge = function () {
            !Fe && Ce(Ee) && (Fe = h, Ga(J, "webkitvisibilitychange", Ge))
        };
        Fa(J, "webkitvisibilitychange", Ge)
    }
    ;
    function Uc(a) {
        var b = 1, c = 0, d;
        if (a) {
            b = 0;
            for (d = a[w] - 1; 0 <= d; d--)c = a.charCodeAt(d), b = (b << 6 & 268435455) + c + (c << 14), c = b & 266338304, b = 0 != c ? b ^ c >> 21 : b
        }
        return b
    }

    ;
})();
