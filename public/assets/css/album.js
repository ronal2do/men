import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "poptrox-overlay": {
        "WebkitTapHighlightColor": "rgba(255, 255, 255, 0)"
    },
    "poptrox-popup": {
        "background": "rgba(31, 34, 36, 0.925)",
        "boxShadow": "0 1em 3em 0.5em rgba(0, 0, 0, 0.25)",
        "cursor": "default"
    },
    "poptrox-popup:before": {
        "MozTransition": "opacity 0.2s ease-in-out",
        "WebkitTransition": "opacity 0.2s ease-in-out",
        "MsTransition": "opacity 0.2s ease-in-out",
        "transition": "opacity 0.2s ease-in-out",
        "backgroundImage": "linear-gradient(to left, rgba(31,34,36,0.35), rgba(31,34,36,0) 10em, rgba(31,34,36,0)), linear-gradient(to right, rgba(31,34,36,0.35), rgba(31,34,36,0) 10em, rgba(31,34,36,0))",
        "content": "''",
        "display": "block",
        "height": "100%",
        "left": 0,
        "position": "absolute",
        "top": 0,
        "width": "100%",
        "zIndex": 1,
        "opacity": 1
    },
    "poptrox-popup closer": {
        "MozTransition": "opacity 0.2s ease-in-out",
        "WebkitTransition": "opacity 0.2s ease-in-out",
        "MsTransition": "opacity 0.2s ease-in-out",
        "transition": "opacity 0.2s ease-in-out",
        "backgroundImage": "url(\"galeria/close.svg\")",
        "backgroundPosition": "center",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": 3,
        "height": 5,
        "opacity": 0,
        "position": "absolute",
        "right": 0,
        "top": 0,
        "width": 5,
        "zIndex": 2
    },
    "poptrox-popup nav-previous": {
        "MozTransition": "opacity 0.2s ease-in-out",
        "WebkitTransition": "opacity 0.2s ease-in-out",
        "MsTransition": "opacity 0.2s ease-in-out",
        "transition": "opacity 0.2s ease-in-out",
        "backgroundImage": "url(\"galeria/arrow.svg\")",
        "backgroundPosition": "center",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": 5,
        "cursor": "pointer",
        "height": 8,
        "marginTop": -4,
        "opacity": 0,
        "position": "absolute",
        "top": "50%",
        "width": 6,
        "zIndex": 2,
        "MozTransform": "scaleX(-1)",
        "WebkitTransform": "scaleX(-1)",
        "MsTransform": "scaleX(-1)",
        "transform": "scaleX(-1)",
        "left": 0
    },
    "poptrox-popup nav-next": {
        "MozTransition": "opacity 0.2s ease-in-out",
        "WebkitTransition": "opacity 0.2s ease-in-out",
        "MsTransition": "opacity 0.2s ease-in-out",
        "transition": "opacity 0.2s ease-in-out",
        "backgroundImage": "url(\"galeria/arrow.svg\")",
        "backgroundPosition": "center",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": 5,
        "cursor": "pointer",
        "height": 8,
        "marginTop": -4,
        "opacity": 0,
        "position": "absolute",
        "top": "50%",
        "width": 6,
        "zIndex": 2,
        "right": 0
    },
    "poptrox-popup caption": {
        "paddingTop": 2,
        "paddingRight": 2,
        "paddingBottom": 0.1,
        "paddingLeft": 2,
        "backgroundImage": "linear-gradient(to top, rgba(16,16,16,0.45) 25%, rgba(16,16,16,0) 100%)",
        "bottom": 0,
        "cursor": "default",
        "left": 0,
        "position": "absolute",
        "textAlign": "left",
        "width": "100%",
        "zIndex": 2
    },
    "poptrox-popup caption h2": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0.5,
        "marginLeft": 0
    },
    "poptrox-popup caption h3": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0.5,
        "marginLeft": 0
    },
    "poptrox-popup caption h4": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0.5,
        "marginLeft": 0
    },
    "poptrox-popup caption h5": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0.5,
        "marginLeft": 0
    },
    "poptrox-popup caption h6": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0.5,
        "marginLeft": 0
    },
    "poptrox-popup caption p": {
        "color": "#ffffff"
    },
    "poptrox-popup loader": {
        "MozAnimation": "spinner 1s infinite linear !important",
        "WebkitAnimation": "spinner 1s infinite linear !important",
        "MsAnimation": "spinner 1s infinite linear !important",
        "animation": "spinner 1s infinite linear !important",
        "backgroundImage": "url(\"galeria/spinner.svg\")",
        "backgroundPosition": "center",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": "contain",
        "display": "block",
        "fontSize": 2,
        "height": 2,
        "left": "50%",
        "lineHeight": 2,
        "marginTop": -1,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": -1,
        "opacity": 0.25,
        "position": "absolute",
        "textAlign": "center",
        "top": "50%",
        "width": 2
    },
    "poptrox-popup:hover closer": {
        "opacity": 0.5
    },
    "poptrox-popup:hover nav-previous": {
        "opacity": 0.5
    },
    "poptrox-popup:hover nav-next": {
        "opacity": 0.5
    },
    "poptrox-popup:hover closer:hover": {
        "opacity": 1
    },
    "poptrox-popup:hover nav-previous:hover": {
        "opacity": 1
    },
    "poptrox-popup:hover nav-next:hover": {
        "opacity": 1
    },
    "poptrox-popuploading:before": {
        "opacity": 0
    },
    "bodytouch poptrox-popup closer": {
        "opacity": "1.0 !important"
    },
    "bodytouch poptrox-popup nav-previous": {
        "opacity": "1.0 !important"
    },
    "bodytouch poptrox-popup nav-next": {
        "opacity": "1.0 !important"
    },
    "Galeria": {
        "MozTransition": "-moz-filter 0.5s ease, -webkit-filter 0.5s ease, -ms-filter 0.5s ease, -moz-filter 0.5s ease",
        "WebkitTransition": "-moz-filter 0.5s ease, -webkit-filter 0.5s ease, -ms-filter 0.5s ease, -webkit-filter 0.5s ease",
        "MsTransition": "-moz-filter 0.5s ease, -webkit-filter 0.5s ease, -ms-filter 0.5s ease, -ms-filter 0.5s ease",
        "transition": "-moz-filter 0.5s ease, -webkit-filter 0.5s ease, -ms-filter 0.5s ease, filter 0.5s ease",
        "position": "relative"
    },
    "Galeria:after": {
        "MozPointerEvents": "none",
        "WebkitPointerEvents": "none",
        "MsPointerEvents": "none",
        "pointerEvents": "none",
        "MozTransition": "opacity 0.5s ease, visibility 0.5s",
        "WebkitTransition": "opacity 0.5s ease, visibility 0.5s",
        "MsTransition": "opacity 0.5s ease, visibility 0.5s",
        "transition": "opacity 0.5s ease, visibility 0.5s",
        "background": "rgba(36, 38, 41, 0.5)",
        "content": "''",
        "display": "block",
        "height": "100%",
        "left": 0,
        "opacity": 0,
        "position": "absolute",
        "top": 0,
        "visibility": "hidden",
        "width": "100%",
        "zIndex": 1
    },
    "bodyie Galeria:after": {
        "background": "rgba(36, 38, 41, 0.8)"
    },
    "bodymodal-active Galeria": {
        "MozFilter": "blur(8px)",
        "WebkitFilter": "blur(8px)",
        "MsFilter": "blur(8px)",
        "filter": "blur(8px)"
    },
    "bodymodal-active Galeria:after": {
        "MozPointerEvents": "auto",
        "WebkitPointerEvents": "auto",
        "MsPointerEvents": "auto",
        "pointerEvents": "auto",
        "opacity": 1,
        "visibility": "visible",
        "zIndex": 10003
    },
    "Galeria:before": {
        "MozAnimation": "spinner 1s infinite linear !important",
        "WebkitAnimation": "spinner 1s infinite linear !important",
        "MsAnimation": "spinner 1s infinite linear !important",
        "animation": "spinner 1s infinite linear !important",
        "MozPointerEvents": "none",
        "WebkitPointerEvents": "none",
        "MsPointerEvents": "none",
        "pointerEvents": "none",
        "MozTransition": "top 0.75s ease-in-out, opacity 0.35s ease-out, visibility 0.35s",
        "WebkitTransition": "top 0.75s ease-in-out, opacity 0.35s ease-out, visibility 0.35s",
        "MsTransition": "top 0.75s ease-in-out, opacity 0.35s ease-out, visibility 0.35s",
        "transition": "top 0.75s ease-in-out, opacity 0.35s ease-out, visibility 0.35s",
        "backgroundImage": "url(\"galeria/spinner.svg\")",
        "backgroundPosition": "center",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": "contain",
        "content": "''",
        "display": "block",
        "fontSize": 2,
        "height": 2,
        "left": "50%",
        "lineHeight": 2,
        "marginTop": -1,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": -1,
        "opacity": 0,
        "position": "fixed",
        "textAlign": "center",
        "top": "75%",
        "visibility": "hidden",
        "width": 2
    },
    "bodyloading Galeria:before": {
        "MozTransition": "opacity 1s ease-out !important",
        "WebkitTransition": "opacity 1s ease-out !important",
        "MsTransition": "opacity 1s ease-out !important",
        "transition": "opacity 1s ease-out !important",
        "MozTransitionDelay": "0.5s !important",
        "WebkitTransitionDelay": "0.5s !important",
        "MsTransitionDelay": "0.5s !important",
        "transitionDelay": "0.5s !important",
        "opacity": 0.25,
        "top": "50%",
        "visibility": "visible"
    },
    "Fotos": {
        "MozTransition": "-moz-filter 0.5s ease, -webkit-filter 0.5s ease, -ms-filter 0.5s ease, -moz-filter 0.5s ease",
        "WebkitTransition": "-moz-filter 0.5s ease, -webkit-filter 0.5s ease, -ms-filter 0.5s ease, -webkit-filter 0.5s ease",
        "MsTransition": "-moz-filter 0.5s ease, -webkit-filter 0.5s ease, -ms-filter 0.5s ease, -ms-filter 0.5s ease",
        "transition": "-moz-filter 0.5s ease, -webkit-filter 0.5s ease, -ms-filter 0.5s ease, filter 0.5s ease",
        "display": "flex",
        "MozFlexWrap": "wrap",
        "WebkitFlexWrap": "wrap",
        "MsFlexWrap": "wrap",
        "flexWrap": "wrap",
        "WebkitTapHighlightColor": "rgba(255, 255, 255, 0)"
    },
    "Fotos thumb": {
        "MozTransition": "opacity 1.25s ease-in-out",
        "WebkitTransition": "opacity 1.25s ease-in-out",
        "MsTransition": "opacity 1.25s ease-in-out",
        "transition": "opacity 1.25s ease-in-out",
        "MozPointerEvents": "auto",
        "WebkitPointerEvents": "auto",
        "MsPointerEvents": "auto",
        "pointerEvents": "auto",
        "WebkitTapHighlightColor": "rgba(255, 255, 255, 0)",
        "opacity": 1,
        "overflow": "hidden",
        "position": "relative",
        "MozTransitionDelay": "2.525s",
        "WebkitTransitionDelay": "2.525s",
        "MsTransitionDelay": "2.525s",
        "transitionDelay": "2.525s",
        "height": "calc(40vh - 2em)",
        "minHeight": 20,
        "width": "calc(100% / 4)"
    },
    "Fotos thumb:after": {
        "backgroundImage": "linear-gradient(to top, rgba(10,17,25,0.35) 5%, rgba(10,17,25,0) 35%)",
        "MozPointerEvents": "none",
        "WebkitPointerEvents": "none",
        "MsPointerEvents": "none",
        "pointerEvents": "none",
        "backgroundSize": "cover",
        "content": "''",
        "display": "block",
        "height": "100%",
        "left": 0,
        "position": "absolute",
        "top": 0,
        "width": "100%"
    },
    "Fotos thumb > image": {
        "WebkitTapHighlightColor": "rgba(255, 255, 255, 0)",
        "backgroundPosition": "center",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": "cover",
        "border": 0,
        "height": "100%",
        "left": 0,
        "position": "absolute",
        "top": 0,
        "width": "100%"
    },
    "Fotos thumb > h2": {
        "MozPointerEvents": "none",
        "WebkitPointerEvents": "none",
        "MsPointerEvents": "none",
        "pointerEvents": "none",
        "bottom": 1.875,
        "fontSize": 0.8,
        "left": 2.1875,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "position": "absolute",
        "zIndex": 1
    },
    "Fotos thumb > p": {
        "display": "none"
    },
    "Fotos:after": {
        "MozPointerEvents": "none",
        "WebkitPointerEvents": "none",
        "MsPointerEvents": "none",
        "pointerEvents": "none",
        "MozTransition": "opacity 0.5s ease, visibility 0.5s",
        "WebkitTransition": "opacity 0.5s ease, visibility 0.5s",
        "MsTransition": "opacity 0.5s ease, visibility 0.5s",
        "transition": "opacity 0.5s ease, visibility 0.5s",
        "background": "rgba(36, 38, 41, 0.25)",
        "content": "''",
        "display": "block",
        "height": "100%",
        "left": 0,
        "opacity": 0,
        "position": "absolute",
        "top": 0,
        "visibility": "hidden",
        "width": "100%",
        "zIndex": 1
    },
    "bodyie Fotos:after": {
        "background": "rgba(36, 38, 41, 0.55)"
    },
    "bodycontent-active Fotos": {
        "MozFilter": "blur(6px)",
        "WebkitFilter": "blur(6px)",
        "MsFilter": "blur(6px)",
        "filter": "blur(6px)"
    },
    "bodycontent-active Fotos:after": {
        "MozPointerEvents": "auto",
        "WebkitPointerEvents": "auto",
        "MsPointerEvents": "auto",
        "pointerEvents": "auto",
        "opacity": 1,
        "visibility": "visible"
    },
    "bodyloading Fotos thumb": {
        "MozPointerEvents": "none",
        "WebkitPointerEvents": "none",
        "MsPointerEvents": "none",
        "pointerEvents": "none",
        "opacity": 0
    },
    "Fotos thumb:nth-child(1)": {
        "MozTransitionDelay": "0.65s",
        "WebkitTransitionDelay": "0.65s",
        "MsTransitionDelay": "0.65s",
        "transitionDelay": "0.65s"
    },
    "Fotos thumb:nth-child(2)": {
        "MozTransitionDelay": "0.8s",
        "WebkitTransitionDelay": "0.8s",
        "MsTransitionDelay": "0.8s",
        "transitionDelay": "0.8s"
    },
    "Fotos thumb:nth-child(3)": {
        "MozTransitionDelay": "0.95s",
        "WebkitTransitionDelay": "0.95s",
        "MsTransitionDelay": "0.95s",
        "transitionDelay": "0.95s"
    },
    "Fotos thumb:nth-child(4)": {
        "MozTransitionDelay": "1.1s",
        "WebkitTransitionDelay": "1.1s",
        "MsTransitionDelay": "1.1s",
        "transitionDelay": "1.1s"
    },
    "Fotos thumb:nth-child(5)": {
        "MozTransitionDelay": "1.25s",
        "WebkitTransitionDelay": "1.25s",
        "MsTransitionDelay": "1.25s",
        "transitionDelay": "1.25s"
    },
    "Fotos thumb:nth-child(6)": {
        "MozTransitionDelay": "1.4s",
        "WebkitTransitionDelay": "1.4s",
        "MsTransitionDelay": "1.4s",
        "transitionDelay": "1.4s"
    },
    "Fotos thumb:nth-child(7)": {
        "MozTransitionDelay": "1.55s",
        "WebkitTransitionDelay": "1.55s",
        "MsTransitionDelay": "1.55s",
        "transitionDelay": "1.55s"
    },
    "Fotos thumb:nth-child(8)": {
        "MozTransitionDelay": "1.7s",
        "WebkitTransitionDelay": "1.7s",
        "MsTransitionDelay": "1.7s",
        "transitionDelay": "1.7s"
    },
    "Fotos thumb:nth-child(9)": {
        "MozTransitionDelay": "1.85s",
        "WebkitTransitionDelay": "1.85s",
        "MsTransitionDelay": "1.85s",
        "transitionDelay": "1.85s"
    },
    "Fotos thumb:nth-child(10)": {
        "MozTransitionDelay": "2s",
        "WebkitTransitionDelay": "2s",
        "MsTransitionDelay": "2s",
        "transitionDelay": "2s"
    },
    "Fotos thumb:nth-child(11)": {
        "MozTransitionDelay": "2.15s",
        "WebkitTransitionDelay": "2.15s",
        "MsTransitionDelay": "2.15s",
        "transitionDelay": "2.15s"
    },
    "Fotos thumb:nth-child(12)": {
        "MozTransitionDelay": "2.3s",
        "WebkitTransitionDelay": "2.3s",
        "MsTransitionDelay": "2.3s",
        "transitionDelay": "2.3s"
    }
});