(()=>{var e,t={435:(e,t,n)=>{"use strict";const a=window.wp.element;var r=n(184),l=n.n(r);const s=window.wp.components,i=({type:e,updateSetting:t,settings:n,children:r})=>{const{assetsURL:i}=neveWhiteLabel,{icon:c,title:o,fields:m}=neveWhiteLabel.fields[e];return(0,a.createElement)("div",{className:`${e} card`},(0,a.createElement)("div",{className:"card-header"},c&&(0,a.createElement)("img",{className:"icon",src:i+c,alt:"icon"}),o&&(0,a.createElement)("h3",{className:"title"},o)),(0,a.createElement)("div",{className:"card-content"},Object.keys(m).map(((e,r)=>{const{type:i,label:c,description:o,dependent:u}=m[e];return(0,a.createElement)("div",{key:r,className:l()(["field-wrap",e])},("text"===i||"url"===i)&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)("label",{htmlFor:e},c,":"),(0,a.createElement)("input",{type:i,id:e,value:n[e],onChange:n=>{t(e,n.target.value)}})),"textarea"===i&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)("label",{htmlFor:e},c,":"),(0,a.createElement)("textarea",{id:e,value:n[e],onChange:n=>{t(e,n.target.value)}})),"toggle"===i&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)(s.ToggleControl,{disabled:n[u],checked:n[e]||n[u]||!1,label:c,onChange:n=>{t(e,n)}}),n[e]&&o&&(0,a.createElement)("p",{className:"description"},o)))})),r))},c=window.wp.i18n,o=()=>(0,a.createElement)("header",null,(0,a.createElement)("div",{className:"container"},(0,a.createElement)("div",{className:"top"},(0,a.createElement)("h1",{className:"heading"},(0,c.__)("White Label Settings","neve"))))),m=window.wp.api,u=()=>{const{optionKey:e}=neveWhiteLabel,[t,n]=(0,a.useState)(neveWhiteLabel.options),[r,u]=(0,a.useState)(!1),[d,p]=(0,a.useState)(""),[v,g]=(0,a.useState)(""),h=(e,a)=>{n({...t,[e]:a})},f=e=>{p(e),g("visible"),setTimeout((()=>{g("")}),2500)};return(0,a.createElement)(a.Fragment,null,(0,a.createElement)(o,null),(0,a.createElement)("form",{onSubmit:n=>{n.preventDefault(),u(!0),((e,t)=>{const n=new m.models.Settings({[e]:t});return new Promise((a=>{n.save().then((n=>{n&&!n[e]!==t||a({success:!1}),a({success:!0})}))}))})(e,JSON.stringify(t)).then((e=>{if(!e.success)return f((0,c.__)("An error occurred. Please refesh and try again.","neve")),u(!1),!1;f((0,c.__)("Options Updated.","neve")),u(!1)}))},className:"container content"},(0,a.createElement)("div",{className:"main"},(0,a.createElement)("div",{className:"columns"},(0,a.createElement)("div",{className:"col"},(0,a.createElement)(i,{type:"agency",updateSetting:h,settings:t}),(0,a.createElement)(i,{type:"plugin",updateSetting:h,settings:t})),(0,a.createElement)("div",{className:"col col-last"},(0,a.createElement)(i,{type:"theme",updateSetting:h,settings:t})))),(0,a.createElement)(i,{type:"sidebar",updateSetting:h,settings:t},(0,a.createElement)("hr",null),(0,a.createElement)(s.Button,{type:"submit",disabled:r,className:"save",isPrimary:!0},r?(0,c.__)("Saving","neve")+"...":(0,c.__)("Save Options","neve")))),(0,a.createElement)(s.Snackbar,{className:l()(["dash-notice",v])},d))};(0,a.render)((0,a.createElement)((()=>(0,a.createElement)(u,null)),null),document.getElementById("white-label-root"))},184:(e,t)=>{var n;!function(){"use strict";var a={}.hasOwnProperty;function r(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var l=typeof n;if("string"===l||"number"===l)e.push(n);else if(Array.isArray(n)){if(n.length){var s=r.apply(null,n);s&&e.push(s)}}else if("object"===l)if(n.toString===Object.prototype.toString)for(var i in n)a.call(n,i)&&n[i]&&e.push(i);else e.push(n.toString())}}return e.join(" ")}e.exports?(r.default=r,e.exports=r):void 0===(n=function(){return r}.apply(t,[]))||(e.exports=n)}()}},n={};function a(e){var r=n[e];if(void 0!==r)return r.exports;var l=n[e]={exports:{}};return t[e](l,l.exports,a),l.exports}a.m=t,e=[],a.O=(t,n,r,l)=>{if(!n){var s=1/0;for(m=0;m<e.length;m++){n=e[m][0],r=e[m][1],l=e[m][2];for(var i=!0,c=0;c<n.length;c++)(!1&l||s>=l)&&Object.keys(a.O).every((e=>a.O[e](n[c])))?n.splice(c--,1):(i=!1,l<s&&(s=l));if(i){e.splice(m--,1);var o=r();void 0!==o&&(t=o)}}return t}l=l||0;for(var m=e.length;m>0&&e[m-1][2]>l;m--)e[m]=e[m-1];e[m]=[n,r,l]},a.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return a.d(t,{a:t}),t},a.d=(e,t)=>{for(var n in t)a.o(t,n)&&!a.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},a.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={826:0,46:0};a.O.j=t=>0===e[t];var t=(t,n)=>{var r,l,s=n[0],i=n[1],c=n[2],o=0;if(s.some((t=>0!==e[t]))){for(r in i)a.o(i,r)&&(a.m[r]=i[r]);if(c)var m=c(a)}for(t&&t(n);o<s.length;o++)l=s[o],a.o(e,l)&&e[l]&&e[l][0](),e[s[o]]=0;return a.O(m)},n=self.webpackChunkneve_pro_addon=self.webpackChunkneve_pro_addon||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})();var r=a.O(void 0,[46],(()=>a(435)));r=a.O(r)})();