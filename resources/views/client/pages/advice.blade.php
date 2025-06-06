@extends('client.layouts.master')

@section('title')
    Góp ý
@endsection

@section('content')
    <section class="about-breadcrumb">
        <div id="header" class="about-back section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link d-flex gap-2" style="font-size: 1rem">
                                <li class="text-white"><a href="{{ route('client.index') }}">Trang chủ</a> / </li>
                                <li class="text-muted"><span>Góp ý</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <livewire:client.advice />
    </div>
@endsection

@section('styles-custom')
    <style>
        #header {
            position: relative;
            background-image: url("{{ asset('assets/client/image/student-login.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden; /* Ẩn phần dư thừa của lớp phủ */
        }

        #register-button:hover {
            background-color: rgba(255, 255, 255, 0.5);
            color: rgba(13, 51, 37, 0.8);
        }

        .toast-title {
            font-weight: 700
        }

        .toast-message {
            -ms-word-wrap: break-word;
            word-wrap: break-word
        }

        .toast-message a,
        .toast-message label {
            color: #FFF
        }

        .toast-message a:hover {
            color: #CCC;
            text-decoration: none
        }

        .toast-close-button {
            position: relative;
            right: -.3em;
            top: -.3em;
            float: right;
            font-size: 20px;
            font-weight: 700;
            color: #FFF;
            -webkit-text-shadow: 0 1px 0 #fff;
            text-shadow: 0 1px 0 #fff;
            opacity: .8;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
            filter: alpha(opacity=80);
            line-height: 1
        }

        .toast-close-button:focus,
        .toast-close-button:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: .4;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
            filter: alpha(opacity=40)
        }

        .rtl .toast-close-button {
            left: -.3em;
            float: left;
            right: .3em
        }

        button.toast-close-button {
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
            -webkit-appearance: none
        }

        .toast-top-center {
            top: 0;
            right: 0;
            width: 100%
        }

        .toast-bottom-center {
            bottom: 0;
            right: 0;
            width: 100%
        }

        .toast-top-full-width {
            top: 0;
            right: 0;
            width: 100%
        }

        .toast-bottom-full-width {
            bottom: 0;
            right: 0;
            width: 100%
        }

        .toast-top-left {
            top: 12px;
            left: 12px
        }

        .toast-top-right {
            top: 12px;
            right: 12px
        }

        .toast-bottom-right {
            right: 12px;
            bottom: 12px
        }

        .toast-bottom-left {
            bottom: 12px;
            left: 12px
        }

        #toast-container {
            position: fixed;
            z-index: 999999;
            pointer-events: none
        }

        #toast-container * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            -moz-box-shadow: 0 0 12px #999;
            -webkit-box-shadow: 0 0 12px #999;
            box-shadow: 0 0 12px #999;
            color: #FFF;
            opacity: .8;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
            filter: alpha(opacity=80)
        }

        #toast-container>div.rtl {
            direction: rtl;
            padding: 15px 50px 15px 15px;
            background-position: right 15px center
        }

        #toast-container>div:hover {
            -moz-box-shadow: 0 0 12px #000;
            -webkit-box-shadow: 0 0 12px #000;
            box-shadow: 0 0 12px #000;
            opacity: 1;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
            filter: alpha(opacity=100);
            cursor: pointer
        }

        #toast-container>.toast-info {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=) !important
        }

        #toast-container>.toast-error {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=) !important
        }

        #toast-container>.toast-success {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==) !important
        }

        #toast-container>.toast-warning {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=) !important
        }

        #toast-container.toast-bottom-center>div,
        #toast-container.toast-top-center>div {
            width: 300px;
            margin-left: auto;
            margin-right: auto
        }

        #toast-container.toast-bottom-full-width>div,
        #toast-container.toast-top-full-width>div {
            width: 96%;
            margin-left: auto;
            margin-right: auto
        }

        .toast {
            background-color: #030303
        }

        .toast-success {
            background-color: #198754
        }

        .toast-error {
            background-color: #BD362F
        }

        .toast-info {
            background-color: #2F96B4
        }

        .toast-warning {
            background-color: #F89406
        }

        .toast-progress {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            background-color: #000;
            opacity: .4;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
            filter: alpha(opacity=40)
        }

        @media all and (max-width:240px) {
            #toast-container>div {
                padding: 8px 8px 8px 50px;
                width: 11em
            }

            #toast-container>div.rtl {
                padding: 8px 50px 8px 8px
            }

            #toast-container .toast-close-button {
                right: -.2em;
                top: -.2em
            }

            #toast-container .rtl .toast-close-button {
                left: -.2em;
                right: .2em
            }
        }

        @media all and (min-width:241px) and (max-width:480px) {
            #toast-container>div {
                padding: 8px 8px 8px 50px;
                width: 18em
            }

            #toast-container>div.rtl {
                padding: 8px 50px 8px 8px
            }

            #toast-container .toast-close-button {
                right: -.2em;
                top: -.2em
            }

            #toast-container .rtl .toast-close-button {
                left: -.2em;
                right: .2em
            }
        }

        @media all and (min-width:481px) and (max-width:768px) {
            #toast-container>div {
                padding: 15px 15px 15px 50px;
                width: 25em
            }

            #toast-container>div.rtl {
                padding: 15px 50px 15px 15px
            }
        }
    </style>
    <style>
        .modal {
            background-color: rgb(255, 255, 255);
            border-radius: 1em;
            box-shadow: 0px 100px 48px -60px rgba(0,0,0,0.1);
            color: rgb(15, 14, 14);
            max-width: 330px;
            overflow: hidden;
            position: relative;
            transition: background-color 0.3s, color 0.3s;
        }

        .content > *, .modal > * {
            padding: 0.875em;
        }

        .title {
            font-size: 1.25em;
            font-weight: 600;
            line-height: 1.2;
            display: flex;
            justify-content: center;
        }

        .message {
            line-height: 1.2;
            text-align: center;
        }

        .actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .upload-btn {
            background-color: transparent;
            border: 1px solid hsla(0, 0%, 79%, 0.71);
            border-radius: 5px;
            flex: 1;
            padding: 10px 2rem;
            color: rgb(89,92,95);
            font-weight:500;
        }

        .upload-btn:hover {
            background-color: hsla(223,10%,60%,0.2);
        }

        .result {
            margin-top: 4px;
            background-color: rgba(0, 140, 255, 0.062);
            display: flex;
            align-items: center;
            position: relative;
            border-radius: 1em;
        }

        .file-uploaded {
            font-weight: 300;
            width: 100%;
            padding: 10px;
        }

        .file-uploaded img{
            width: 100%;
            max-height: 300px;
            object-fit: cover;
        }

        .remove {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(26, 7, 1, 0.212);
            height: 30px;
            width: 30px;
            border-radius: 50%;
            right: 10px;
            top: 10px;
            color: rgb(255, 255, 255);
            font-weight: bold;
            cursor: pointer;
        }

        .remove:hover {
            background-color: #448b1f;
        }
    </style>
@endsection

@section('scripts-custom')
    <script>
        ! function(e) {
            e(["jquery"], function(e) {
                return function() {
                    function t(e, t, n) {
                        return g({
                            type: O.error,
                            iconClass: m().iconClasses.error,
                            message: e,
                            optionsOverride: n,
                            title: t
                        })
                    }

                    function n(t, n) {
                        return t || (t = m()), v = e("#" + t.containerId), v.length ? v : (n && (v = d(t)), v)
                    }

                    function o(e, t, n) {
                        return g({
                            type: O.info,
                            iconClass: m().iconClasses.info,
                            message: e,
                            optionsOverride: n,
                            title: t
                        })
                    }

                    function s(e) {
                        C = e
                    }

                    function i(e, t, n) {
                        return g({
                            type: O.success,
                            iconClass: m().iconClasses.success,
                            message: e,
                            optionsOverride: n,
                            title: t
                        })
                    }

                    function a(e, t, n) {
                        return g({
                            type: O.warning,
                            iconClass: m().iconClasses.warning,
                            message: e,
                            optionsOverride: n,
                            title: t
                        })
                    }

                    function r(e, t) {
                        var o = m();
                        v || n(o), u(e, o, t) || l(o)
                    }

                    function c(t) {
                        var o = m();
                        return v || n(o), t && 0 === e(":focus", t).length ? void h(t) : void(v.children().length && v.remove())
                    }

                    function l(t) {
                        for (var n = v.children(), o = n.length - 1; o >= 0; o--) u(e(n[o]), t)
                    }

                    function u(t, n, o) {
                        var s = !(!o || !o.force) && o.force;
                        return !(!t || !s && 0 !== e(":focus", t).length) && (t[n.hideMethod]({
                            duration: n.hideDuration,
                            easing: n.hideEasing,
                            complete: function() {
                                h(t)
                            }
                        }), !0)
                    }

                    function d(t) {
                        return v = e("<div/>").attr("id", t.containerId).addClass(t.positionClass), v.appendTo(e(t.target)), v
                    }

                    function p() {
                        return {
                            tapToDismiss: !0,
                            toastClass: "toast",
                            containerId: "toast-container",
                            debug: !1,
                            showMethod: "fadeIn",
                            showDuration: 300,
                            showEasing: "swing",
                            onShown: void 0,
                            hideMethod: "fadeOut",
                            hideDuration: 1e3,
                            hideEasing: "swing",
                            onHidden: void 0,
                            closeMethod: !1,
                            closeDuration: !1,
                            closeEasing: !1,
                            closeOnHover: !0,
                            extendedTimeOut: 1e3,
                            iconClasses: {
                                error: "toast-error",
                                info: "toast-info",
                                success: "toast-success",
                                warning: "toast-warning"
                            },
                            iconClass: "toast-info",
                            positionClass: "toast-top-right",
                            timeOut: 5e3,
                            titleClass: "toast-title",
                            messageClass: "toast-message",
                            escapeHtml: !1,
                            target: "body",
                            closeHtml: '<button type="button">&times;</button>',
                            closeClass: "toast-close-button",
                            newestOnTop: !0,
                            preventDuplicates: !1,
                            progressBar: !1,
                            progressClass: "toast-progress",
                            rtl: !1
                        }
                    }

                    function f(e) {
                        C && C(e)
                    }

                    function g(t) {
                        function o(e) {
                            return null == e && (e = ""), e.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
                        }

                        function s() {
                            c(), u(), d(), p(), g(), C(), l(), i()
                        }

                        function i() {
                            var e = "";
                            switch (t.iconClass) {
                                case "toast-success":
                                case "toast-info":
                                    e = "polite";
                                    break;
                                default:
                                    e = "assertive"
                            }
                            I.attr("aria-live", e)
                        }

                        function a() {
                            E.closeOnHover && I.hover(H, D), !E.onclick && E.tapToDismiss && I.click(b), E.closeButton && j && j.click(function(e) {
                                e.stopPropagation ? e.stopPropagation() : void 0 !== e.cancelBubble && e.cancelBubble !== !0 && (e.cancelBubble = !0), E.onCloseClick && E.onCloseClick(e), b(!0)
                            }), E.onclick && I.click(function(e) {
                                E.onclick(e), b()
                            })
                        }

                        function r() {
                            I.hide(), I[E.showMethod]({
                                duration: E.showDuration,
                                easing: E.showEasing,
                                complete: E.onShown
                            }), E.timeOut > 0 && (k = setTimeout(b, E.timeOut), F.maxHideTime = parseFloat(E.timeOut), F.hideEta = (new Date).getTime() + F.maxHideTime, E.progressBar && (F.intervalId = setInterval(x, 10)))
                        }

                        function c() {
                            t.iconClass && I.addClass(E.toastClass).addClass(y)
                        }

                        function l() {
                            E.newestOnTop ? v.prepend(I) : v.append(I)
                        }

                        function u() {
                            if (t.title) {
                                var e = t.title;
                                E.escapeHtml && (e = o(t.title)), M.append(e).addClass(E.titleClass), I.append(M)
                            }
                        }

                        function d() {
                            if (t.message) {
                                var e = t.message;
                                E.escapeHtml && (e = o(t.message)), B.append(e).addClass(E.messageClass), I.append(B)
                            }
                        }

                        function p() {
                            E.closeButton && (j.addClass(E.closeClass).attr("role", "button"), I.prepend(j))
                        }

                        function g() {
                            E.progressBar && (q.addClass(E.progressClass), I.prepend(q))
                        }

                        function C() {
                            E.rtl && I.addClass("rtl")
                        }

                        function O(e, t) {
                            if (e.preventDuplicates) {
                                if (t.message === w) return !0;
                                w = t.message
                            }
                            return !1
                        }

                        function b(t) {
                            var n = t && E.closeMethod !== !1 ? E.closeMethod : E.hideMethod,
                                o = t && E.closeDuration !== !1 ? E.closeDuration : E.hideDuration,
                                s = t && E.closeEasing !== !1 ? E.closeEasing : E.hideEasing;
                            if (!e(":focus", I).length || t) return clearTimeout(F.intervalId), I[n]({
                                duration: o,
                                easing: s,
                                complete: function() {
                                    h(I), clearTimeout(k), E.onHidden && "hidden" !== P.state && E.onHidden(), P.state = "hidden", P.endTime = new Date, f(P)
                                }
                            })
                        }

                        function D() {
                            (E.timeOut > 0 || E.extendedTimeOut > 0) && (k = setTimeout(b, E.extendedTimeOut), F.maxHideTime = parseFloat(E.extendedTimeOut), F.hideEta = (new Date).getTime() + F.maxHideTime)
                        }

                        function H() {
                            clearTimeout(k), F.hideEta = 0, I.stop(!0, !0)[E.showMethod]({
                                duration: E.showDuration,
                                easing: E.showEasing
                            })
                        }

                        function x() {
                            var e = (F.hideEta - (new Date).getTime()) / F.maxHideTime * 100;
                            q.width(e + "%")
                        }
                        var E = m(),
                            y = t.iconClass || E.iconClass;
                        if ("undefined" != typeof t.optionsOverride && (E = e.extend(E, t.optionsOverride), y = t.optionsOverride.iconClass || y), !O(E, t)) {
                            T++, v = n(E, !0);
                            var k = null,
                                I = e("<div/>"),
                                M = e("<div/>"),
                                B = e("<div/>"),
                                q = e("<div/>"),
                                j = e(E.closeHtml),
                                F = {
                                    intervalId: null,
                                    hideEta: null,
                                    maxHideTime: null
                                },
                                P = {
                                    toastId: T,
                                    state: "visible",
                                    startTime: new Date,
                                    options: E,
                                    map: t
                                };
                            return s(), r(), a(), f(P), E.debug && console && console.log(P), I
                        }
                    }

                    function m() {
                        return e.extend({}, p(), b.options)
                    }

                    function h(e) {
                        v || (v = n()), e.is(":visible") || (e.remove(), e = null, 0 === v.children().length && (v.remove(), w = void 0))
                    }
                    var v, C, w, T = 0,
                        O = {
                            error: "error",
                            info: "info",
                            success: "success",
                            warning: "warning"
                        },
                        b = {
                            clear: r,
                            remove: c,
                            error: t,
                            getContainer: n,
                            info: o,
                            options: {},
                            subscribe: s,
                            success: i,
                            version: "2.1.3",
                            warning: a
                        };
                    return b
                }()
            })
        }("function" == typeof define && define.amd ? define : function(e, t) {
            "undefined" != typeof module && module.exports ? module.exports = t(require("jquery")) : window.toastr = t(window.jQuery)
        });
        //# sourceMappingURL=toastr.js.map
    </script>
@endsection
