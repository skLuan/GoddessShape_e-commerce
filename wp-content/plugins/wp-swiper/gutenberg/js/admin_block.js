/*! For license information please see admin_block.js.LICENSE.txt */
(()=>{var e={991:(e,t)=>{var n;!function(){"use strict";var l=function(){function e(){}function t(e,t){for(var n=t.length,l=0;l<n;++l)a(e,t[l])}e.prototype=Object.create(null);var n={}.hasOwnProperty,l=/\s+/;function a(e,a){if(a){var o=typeof a;"string"===o?function(e,t){for(var n=t.split(l),a=n.length,o=0;o<a;++o)e[n[o]]=!0}(e,a):Array.isArray(a)?t(e,a):"object"===o?function(e,t){if(t.toString===Object.prototype.toString)for(var l in t)n.call(t,l)&&(e[l]=!!t[l]);else e[t.toString()]=!0}(e,a):"number"===o&&function(e,t){e[t]=!0}(e,a)}}return function(){for(var n=arguments.length,l=Array(n),a=0;a<n;a++)l[a]=arguments[a];var o=new e;t(o,l);var r=[];for(var i in o)o[i]&&r.push(i);return r.join(" ")}}();e.exports?(l.default=l,e.exports=l):void 0===(n=function(){return l}.apply(t,[]))||(e.exports=n)}()},304:function(e){var t;t=function(){var e=JSON.parse('{"$":"dollar","%":"percent","&":"and","<":"less",">":"greater","|":"or","¢":"cent","£":"pound","¤":"currency","¥":"yen","©":"(c)","ª":"a","®":"(r)","º":"o","À":"A","Á":"A","Â":"A","Ã":"A","Ä":"A","Å":"A","Æ":"AE","Ç":"C","È":"E","É":"E","Ê":"E","Ë":"E","Ì":"I","Í":"I","Î":"I","Ï":"I","Ð":"D","Ñ":"N","Ò":"O","Ó":"O","Ô":"O","Õ":"O","Ö":"O","Ø":"O","Ù":"U","Ú":"U","Û":"U","Ü":"U","Ý":"Y","Þ":"TH","ß":"ss","à":"a","á":"a","â":"a","ã":"a","ä":"a","å":"a","æ":"ae","ç":"c","è":"e","é":"e","ê":"e","ë":"e","ì":"i","í":"i","î":"i","ï":"i","ð":"d","ñ":"n","ò":"o","ó":"o","ô":"o","õ":"o","ö":"o","ø":"o","ù":"u","ú":"u","û":"u","ü":"u","ý":"y","þ":"th","ÿ":"y","Ā":"A","ā":"a","Ă":"A","ă":"a","Ą":"A","ą":"a","Ć":"C","ć":"c","Č":"C","č":"c","Ď":"D","ď":"d","Đ":"DJ","đ":"dj","Ē":"E","ē":"e","Ė":"E","ė":"e","Ę":"e","ę":"e","Ě":"E","ě":"e","Ğ":"G","ğ":"g","Ģ":"G","ģ":"g","Ĩ":"I","ĩ":"i","Ī":"i","ī":"i","Į":"I","į":"i","İ":"I","ı":"i","Ķ":"k","ķ":"k","Ļ":"L","ļ":"l","Ľ":"L","ľ":"l","Ł":"L","ł":"l","Ń":"N","ń":"n","Ņ":"N","ņ":"n","Ň":"N","ň":"n","Ō":"O","ō":"o","Ő":"O","ő":"o","Œ":"OE","œ":"oe","Ŕ":"R","ŕ":"r","Ř":"R","ř":"r","Ś":"S","ś":"s","Ş":"S","ş":"s","Š":"S","š":"s","Ţ":"T","ţ":"t","Ť":"T","ť":"t","Ũ":"U","ũ":"u","Ū":"u","ū":"u","Ů":"U","ů":"u","Ű":"U","ű":"u","Ų":"U","ų":"u","Ŵ":"W","ŵ":"w","Ŷ":"Y","ŷ":"y","Ÿ":"Y","Ź":"Z","ź":"z","Ż":"Z","ż":"z","Ž":"Z","ž":"z","Ə":"E","ƒ":"f","Ơ":"O","ơ":"o","Ư":"U","ư":"u","ǈ":"LJ","ǉ":"lj","ǋ":"NJ","ǌ":"nj","Ș":"S","ș":"s","Ț":"T","ț":"t","ə":"e","˚":"o","Ά":"A","Έ":"E","Ή":"H","Ί":"I","Ό":"O","Ύ":"Y","Ώ":"W","ΐ":"i","Α":"A","Β":"B","Γ":"G","Δ":"D","Ε":"E","Ζ":"Z","Η":"H","Θ":"8","Ι":"I","Κ":"K","Λ":"L","Μ":"M","Ν":"N","Ξ":"3","Ο":"O","Π":"P","Ρ":"R","Σ":"S","Τ":"T","Υ":"Y","Φ":"F","Χ":"X","Ψ":"PS","Ω":"W","Ϊ":"I","Ϋ":"Y","ά":"a","έ":"e","ή":"h","ί":"i","ΰ":"y","α":"a","β":"b","γ":"g","δ":"d","ε":"e","ζ":"z","η":"h","θ":"8","ι":"i","κ":"k","λ":"l","μ":"m","ν":"n","ξ":"3","ο":"o","π":"p","ρ":"r","ς":"s","σ":"s","τ":"t","υ":"y","φ":"f","χ":"x","ψ":"ps","ω":"w","ϊ":"i","ϋ":"y","ό":"o","ύ":"y","ώ":"w","Ё":"Yo","Ђ":"DJ","Є":"Ye","І":"I","Ї":"Yi","Ј":"J","Љ":"LJ","Њ":"NJ","Ћ":"C","Џ":"DZ","А":"A","Б":"B","В":"V","Г":"G","Д":"D","Е":"E","Ж":"Zh","З":"Z","И":"I","Й":"J","К":"K","Л":"L","М":"M","Н":"N","О":"O","П":"P","Р":"R","С":"S","Т":"T","У":"U","Ф":"F","Х":"H","Ц":"C","Ч":"Ch","Ш":"Sh","Щ":"Sh","Ъ":"U","Ы":"Y","Ь":"","Э":"E","Ю":"Yu","Я":"Ya","а":"a","б":"b","в":"v","г":"g","д":"d","е":"e","ж":"zh","з":"z","и":"i","й":"j","к":"k","л":"l","м":"m","н":"n","о":"o","п":"p","р":"r","с":"s","т":"t","у":"u","ф":"f","х":"h","ц":"c","ч":"ch","ш":"sh","щ":"sh","ъ":"u","ы":"y","ь":"","э":"e","ю":"yu","я":"ya","ё":"yo","ђ":"dj","є":"ye","і":"i","ї":"yi","ј":"j","љ":"lj","њ":"nj","ћ":"c","ѝ":"u","џ":"dz","Ґ":"G","ґ":"g","Ғ":"GH","ғ":"gh","Қ":"KH","қ":"kh","Ң":"NG","ң":"ng","Ү":"UE","ү":"ue","Ұ":"U","ұ":"u","Һ":"H","һ":"h","Ә":"AE","ә":"ae","Ө":"OE","ө":"oe","Ա":"A","Բ":"B","Գ":"G","Դ":"D","Ե":"E","Զ":"Z","Է":"E\'","Ը":"Y\'","Թ":"T\'","Ժ":"JH","Ի":"I","Լ":"L","Խ":"X","Ծ":"C\'","Կ":"K","Հ":"H","Ձ":"D\'","Ղ":"GH","Ճ":"TW","Մ":"M","Յ":"Y","Ն":"N","Շ":"SH","Չ":"CH","Պ":"P","Ջ":"J","Ռ":"R\'","Ս":"S","Վ":"V","Տ":"T","Ր":"R","Ց":"C","Փ":"P\'","Ք":"Q\'","Օ":"O\'\'","Ֆ":"F","և":"EV","ء":"a","آ":"aa","أ":"a","ؤ":"u","إ":"i","ئ":"e","ا":"a","ب":"b","ة":"h","ت":"t","ث":"th","ج":"j","ح":"h","خ":"kh","د":"d","ذ":"th","ر":"r","ز":"z","س":"s","ش":"sh","ص":"s","ض":"dh","ط":"t","ظ":"z","ع":"a","غ":"gh","ف":"f","ق":"q","ك":"k","ل":"l","م":"m","ن":"n","ه":"h","و":"w","ى":"a","ي":"y","ً":"an","ٌ":"on","ٍ":"en","َ":"a","ُ":"u","ِ":"e","ْ":"","٠":"0","١":"1","٢":"2","٣":"3","٤":"4","٥":"5","٦":"6","٧":"7","٨":"8","٩":"9","پ":"p","چ":"ch","ژ":"zh","ک":"k","گ":"g","ی":"y","۰":"0","۱":"1","۲":"2","۳":"3","۴":"4","۵":"5","۶":"6","۷":"7","۸":"8","۹":"9","฿":"baht","ა":"a","ბ":"b","გ":"g","დ":"d","ე":"e","ვ":"v","ზ":"z","თ":"t","ი":"i","კ":"k","ლ":"l","მ":"m","ნ":"n","ო":"o","პ":"p","ჟ":"zh","რ":"r","ს":"s","ტ":"t","უ":"u","ფ":"f","ქ":"k","ღ":"gh","ყ":"q","შ":"sh","ჩ":"ch","ც":"ts","ძ":"dz","წ":"ts","ჭ":"ch","ხ":"kh","ჯ":"j","ჰ":"h","Ṣ":"S","ṣ":"s","Ẁ":"W","ẁ":"w","Ẃ":"W","ẃ":"w","Ẅ":"W","ẅ":"w","ẞ":"SS","Ạ":"A","ạ":"a","Ả":"A","ả":"a","Ấ":"A","ấ":"a","Ầ":"A","ầ":"a","Ẩ":"A","ẩ":"a","Ẫ":"A","ẫ":"a","Ậ":"A","ậ":"a","Ắ":"A","ắ":"a","Ằ":"A","ằ":"a","Ẳ":"A","ẳ":"a","Ẵ":"A","ẵ":"a","Ặ":"A","ặ":"a","Ẹ":"E","ẹ":"e","Ẻ":"E","ẻ":"e","Ẽ":"E","ẽ":"e","Ế":"E","ế":"e","Ề":"E","ề":"e","Ể":"E","ể":"e","Ễ":"E","ễ":"e","Ệ":"E","ệ":"e","Ỉ":"I","ỉ":"i","Ị":"I","ị":"i","Ọ":"O","ọ":"o","Ỏ":"O","ỏ":"o","Ố":"O","ố":"o","Ồ":"O","ồ":"o","Ổ":"O","ổ":"o","Ỗ":"O","ỗ":"o","Ộ":"O","ộ":"o","Ớ":"O","ớ":"o","Ờ":"O","ờ":"o","Ở":"O","ở":"o","Ỡ":"O","ỡ":"o","Ợ":"O","ợ":"o","Ụ":"U","ụ":"u","Ủ":"U","ủ":"u","Ứ":"U","ứ":"u","Ừ":"U","ừ":"u","Ử":"U","ử":"u","Ữ":"U","ữ":"u","Ự":"U","ự":"u","Ỳ":"Y","ỳ":"y","Ỵ":"Y","ỵ":"y","Ỷ":"Y","ỷ":"y","Ỹ":"Y","ỹ":"y","–":"-","‘":"\'","’":"\'","“":"\\"","”":"\\"","„":"\\"","†":"+","•":"*","…":"...","₠":"ecu","₢":"cruzeiro","₣":"french franc","₤":"lira","₥":"mill","₦":"naira","₧":"peseta","₨":"rupee","₩":"won","₪":"new shequel","₫":"dong","€":"euro","₭":"kip","₮":"tugrik","₯":"drachma","₰":"penny","₱":"peso","₲":"guarani","₳":"austral","₴":"hryvnia","₵":"cedi","₸":"kazakhstani tenge","₹":"indian rupee","₺":"turkish lira","₽":"russian ruble","₿":"bitcoin","℠":"sm","™":"tm","∂":"d","∆":"delta","∑":"sum","∞":"infinity","♥":"love","元":"yuan","円":"yen","﷼":"rial","ﻵ":"laa","ﻷ":"laa","ﻹ":"lai","ﻻ":"la"}'),t=JSON.parse('{"bg":{"Й":"Y","Ц":"Ts","Щ":"Sht","Ъ":"A","Ь":"Y","й":"y","ц":"ts","щ":"sht","ъ":"a","ь":"y"},"de":{"Ä":"AE","ä":"ae","Ö":"OE","ö":"oe","Ü":"UE","ü":"ue","ß":"ss","%":"prozent","&":"und","|":"oder","∑":"summe","∞":"unendlich","♥":"liebe"},"es":{"%":"por ciento","&":"y","<":"menor que",">":"mayor que","|":"o","¢":"centavos","£":"libras","¤":"moneda","₣":"francos","∑":"suma","∞":"infinito","♥":"amor"},"fr":{"%":"pourcent","&":"et","<":"plus petit",">":"plus grand","|":"ou","¢":"centime","£":"livre","¤":"devise","₣":"franc","∑":"somme","∞":"infini","♥":"amour"},"pt":{"%":"porcento","&":"e","<":"menor",">":"maior","|":"ou","¢":"centavo","∑":"soma","£":"libra","∞":"infinito","♥":"amor"},"uk":{"И":"Y","и":"y","Й":"Y","й":"y","Ц":"Ts","ц":"ts","Х":"Kh","х":"kh","Щ":"Shch","щ":"shch","Г":"H","г":"h"},"vi":{"Đ":"D","đ":"d"},"da":{"Ø":"OE","ø":"oe","Å":"AA","å":"aa","%":"procent","&":"og","|":"eller","$":"dollar","<":"mindre end",">":"større end"},"nb":{"&":"og","Å":"AA","Æ":"AE","Ø":"OE","å":"aa","æ":"ae","ø":"oe"},"it":{"&":"e"},"nl":{"&":"en"},"sv":{"&":"och","Å":"AA","Ä":"AE","Ö":"OE","å":"aa","ä":"ae","ö":"oe"}}');function n(n,l){if("string"!=typeof n)throw new Error("slugify: string argument expected");var a=t[(l="string"==typeof l?{replacement:l}:l||{}).locale]||{},o=void 0===l.replacement?"-":l.replacement,r=void 0===l.trim||l.trim,i=n.normalize().split("").reduce((function(t,n){var r=a[n]||e[n]||n;return r===o&&(r=" "),t+r.replace(l.remove||/[^\w\s$*_+~.()'"!\-:@]+/g,"")}),"");return l.strict&&(i=i.replace(/[^A-Za-z0-9\s]/g,"")),r&&(i=i.trim()),i=i.replace(/\s+/g,o),l.lower&&(i=i.toLowerCase()),i}return n.extend=function(t){Object.assign(e,t)},n},e.exports=t(),e.exports.default=t()},726:function(e,t,n){"use strict";var l;!function(a){if("function"!=typeof o){var o=function(e){return e};o.nonNative=!0}const r=o("plaintext"),i=o("html"),s=o("comment"),c=/<(\w*)>/g,p=/<\/?([^\s\/>]+)/;function m(e,t,n){return d(e=e||"",u(t=t||[],n=n||""))}function u(e,t){return{allowable_tags:e=function(e){let t=new Set;if("string"==typeof e){let n;for(;n=c.exec(e);)t.add(n[1])}else o.nonNative||"function"!=typeof e[o.iterator]?"function"==typeof e.forEach&&e.forEach(t.add,t):t=new Set(e);return t}(e),tag_replacement:t,state:r,tag_buffer:"",depth:0,in_quote_char:""}}function d(e,t){if("string"!=typeof e)throw new TypeError("'html' parameter must be a string");let n=t.allowable_tags,l=t.tag_replacement,a=t.state,o=t.tag_buffer,c=t.depth,p=t.in_quote_char,m="";for(let t=0,u=e.length;t<u;t++){let u=e[t];if(a===r)"<"===u?(a=i,o+=u):m+=u;else if(a===i)switch(u){case"<":if(p)break;c++;break;case">":if(p)break;if(c){c--;break}p="",a=r,o+=">",n.has(w(o))?m+=o:m+=l,o="";break;case'"':case"'":p=u===p?"":p||u,o+=u;break;case"-":"<!-"===o&&(a=s),o+=u;break;case" ":case"\n":if("<"===o){a=r,m+="< ",o="";break}o+=u;break;default:o+=u}else a===s&&(">"===u?("--"==o.slice(-2)&&(a=r),o=""):o+=u)}return t.state=a,t.tag_buffer=o,t.depth=c,t.in_quote_char=p,m}function w(e){let t=p.exec(e);return t?t[1].toLowerCase():null}m.init_streaming_mode=function(e,t){let n=u(e=e||[],t=t||"");return function(e){return d(e||"",n)}},void 0===(l=function(){return m}.call(t,n,t,e))||(e.exports=l)}()}},t={};function n(l){var a=t[l];if(void 0!==a)return a.exports;var o=t[l]={exports:{}};return e[l].call(o.exports,o,o.exports,n),o.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var l in t)n.o(t,l)&&!n.o(e,l)&&Object.defineProperty(e,l,{enumerable:!0,get:t[l]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=JSON.parse('{"name":"da/wp-swiper-slides","category":"media","supports":{"html":false,"className":false,"anchor":true,"align":["wide","full"]},"attributes":{"align":{"type":"string","default":""},"txtColor":{"type":"string"},"overlayColor":{"type":"object","default":{"rgb":{"r":0,"g":0,"b":0,"a":0}}},"containerWidth":{"type":"number"},"overlayImg":{"type":"string"},"overlayImgOpacity":{"type":"number","default":0.5},"currentSlide":{"type":"number","default":0},"tabActive":{"type":"string","default":"slide-1"},"buttonsAlign":{"type":"string","default":"start"},"autoplay":{"type":"boolean","default":false},"navigation":{"type":"boolean","default":true},"pagination":{"type":"boolean","default":true},"clickable_pagination":{"type":"boolean","default":false},"loop":{"type":"boolean","default":false},"effect":{"type":"string","default":"slide"},"speed":{"type":"number","default":500},"delay":{"type":"number","default":3000},"slidesPerView":{"type":"string","default":1},"spaceBetween":{"type":"number","default":0},"tabsData":{"type":"array","default":[{"slug":"slide-1"},{"slug":"slide-2"}]},"breakpoints":{"type":"string"},"thumbs":{"type":"boolean","default":false},"thumbsSlidesPerView":{"type":"number","default":4},"thumbsSpaceBetween":{"type":"number","default":10},"autoHeight":{"type":"boolean","default":true},"freeMode":{"type":"boolean","default":false},"sticky":{"type":"boolean","default":false},"debug":{"type":"boolean","default":false},"direction":{"type":"string","default":"horizontal"}}}');var t=n(991),l=n.n(t);function a(){return a=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var l in n)Object.prototype.hasOwnProperty.call(n,l)&&(e[l]=n[l])}return e},a.apply(this,arguments)}const{applyFilters:o}=wp.hooks,{Component:r}=wp.element,{RichText:i,InnerBlocks:s}=wp.blockEditor,{name:c}=e,p=[{supports:e.supports,attributes:{...e.attributes},save:class extends r{render(){const{overlayColor:e,overlayImg:t,overlayImgOpacity:n,slidesPerView:o,spaceBetween:r,txtColor:i,autoplay:c,delay:p,speed:m,loop:u,effect:d,navigation:w,pagination:g}=this.props.attributes;let b=l()("wp-swiper");const h=t?{backgroundImage:`url(${t})`}:{};n&&(h.opacity=n);const f=i?{color:i}:{},v={"data-slidesperview":o,"data-spacebetween":r,"data-navigation":w,"data-pagination":g,"data-autoplay":c,"data-delay":p,"data-speed":m,"data-loop":u,"data-effect":d};return wp.element.createElement("div",{className:b},this.getOverlayImg(t,h),wp.element.createElement("div",{className:"wp-swiper__wrapper",style:f},wp.element.createElement("div",a({className:"swiper-container"},v),wp.element.createElement("div",{className:"swiper-wrapper"},wp.element.createElement(s.Content,null)))),this.getQuoteSVG(this.props),this.getPagination(this.props),this.getNavigation(this.props))}getOverlayImg(e,t){if(void 0!==e)return wp.element.createElement("div",{className:"wp-swiper__overlay-img",style:t})}getPagination(e){let{attributes:t}=e;const{pagination:n}=t;if(n)return wp.element.createElement("div",{className:"swiper-pagination"})}getNavigation(e){let{attributes:t}=e;const{navigation:n}=t;if(n)return wp.element.createElement(wp.element.Fragment,null,wp.element.createElement("div",{className:"swiper-button-prev"}),wp.element.createElement("div",{className:"swiper-button-next"}))}getQuoteSVG(e){let{attributes:t}=e,{className:n}=t;if(n=n?n.toString():"",-1!==n.indexOf("is-style-testimonials"))return wp.element.createElement(wp.element.Fragment,null,wp.element.createElement("div",{className:"wp-swiper__quotes"},wp.element.createElement("svg",{"aria-hidden":"true",focusable:"false","data-prefix":"fas","data-icon":"quote-right",role:"img",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 512 512",class:"svg-inline--fa fa-quote-right fa-w-16 fa-5x"},wp.element.createElement("path",{fill:"currentColor",d:"M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z",class:""}))))}}}],m=wp.i18n,u=wp.element,d=wp.blocks,w=wp.components,g=wp.blockEditor,b=wp.compose,h=wp.data,{Component:f}=wp.element,{__:v}=wp.i18n,{Button:E,Popover:y}=wp.components;class k extends f{constructor(){super(...arguments),this.state={confirmed:-1}}render(){const{onRemove:e,show:t,style:n,tooltipText:l=v("Remove Slide?","@@text_domain"),tooltipRemoveText:a=v("Remove","@@text_domain"),tooltipCancelText:o=v("Cancel","@@text_domain")}=this.props,{confirmed:r}=this.state;return t?wp.element.createElement(E,{className:"wb-component-remove-button",onClick:()=>{-1===r&&this.setState({confirmed:0})},style:n},0===r?wp.element.createElement(y,{className:"wb-component-remove-button-confirm",onClose:()=>{this.setState({confirmed:-1})},onClickOutside:()=>{this.setState({confirmed:-1})}},l,wp.element.createElement(E,{className:"wb-component-remove-button-confirm-yep",onClick:e},a),wp.element.createElement(E,{className:"wb-component-remove-button-confirm-nope",onClick:()=>{this.setState({confirmed:-1})}},o)):"",wp.element.createElement("svg",{"aria-hidden":"true",focusable:"false","data-prefix":"fas","data-icon":"trash",role:"img",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 448 512",class:"svg-inline--fa fa-trash fa-w-14 fa-3x"},wp.element.createElement("path",{fill:"currentColor",d:"M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z",class:""}))):""}}var C=n(304),_=n.n(C),S=n(726),B=n.n(S);const{getBlocks:x}=wp.data.select("core/block-editor");function I(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"none",n=[];return"none"===t&&(t=x()),t.forEach((t=>{t.clientId!==e&&t.attributes&&(t.attributes.anchor&&n.push(t.attributes.anchor),"wb/tabs-tab"===t.name&&t.attributes.slug&&n.push(t.attributes.slug)),t.innerBlocks&&t.innerBlocks.length&&(n=[...n,...I(e,t.innerBlocks)])})),n}function P(e,t){let n=!0;return t.forEach((t=>{t===e&&(n=!1)})),n}function O(e){return _()(B()(e),{replacement:"-",remove:/[*_+~()'"!?\/\-â€”â€“âˆ’:@^|&#.,;%<>{}]/g,lower:!0})}function N(e,t){let n="",l=0;const a=I(t);for(;!n||!P(n,a);)n&&(l+=1),n=`${O(e)}${l?`-${l}`:""}`;return n}function A(e){return wp.element.createElement("div",{className:"wb-tabs-icon"},""!=e&&wp.element.createElement("img",{className:"wb-tabs-icon_image",src:e}))}const T=lodash;class R extends u.Component{constructor(){super(...arguments),this.getTabsTemplate=this.getTabsTemplate.bind(this),this.getTabs=this.getTabs.bind(this),this.changeLabel=this.changeLabel.bind(this),this.removeTab=this.removeTab.bind(this)}getTabsTemplate(){const{tabsData:e}=this.props.attributes;return e.map((e=>["da/wp-swiper-slide",e]))}getTabs(){return this.props.block.innerBlocks}changeLabel(e,t,n){const{setAttributes:l,attributes:a,updateBlockAttributes:o}=this.props,{tabsData:r}=a,i=this.getTabs();if(i[n]){const a="title"==e?N(`tab ${t}`,i[n].clientId):r[n].slug,s=r.map(((l,o)=>n===o?{...l,title:"title"==e?t:r[n].title,subtitle:"subtitle"==e?t:r[n].subtitle,image:"image"==e?t:r[n].image,overlayImg:"overlayImg"==e?t:r[n].overlayImg,overlayColor:"overlayColor"==e?t:r[n].overlayColor,slug:a}:l));l({currentSlide:n,tabActive:a,tabsData:s}),o(i[n].clientId,{slug:a})}}removeTab(e){const{setAttributes:t,attributes:n,block:l,getBlocks:a,replaceInnerBlocks:o}=this.props,{tabsData:r=[]}=n;if(1>=l.innerBlocks.length)this.props.removeBlock(l.clientId);else if(l.innerBlocks[e]&&(this.props.removeBlock(l.innerBlocks[e].clientId),r[e])){const n=[...r];n.splice(e,1);const i=[...a(l.clientId)];i.splice(e,1),o(l.clientId,i,!1),t({tabsData:n})}}componentDidUpdate(e,t){const{block:n,setAttributes:l,replaceInnerBlocks:a,getBlocks:o}=this.props,r=e.block.innerBlocks.map((function(e){return e.clientId})),i=n.innerBlocks.map((function(e){return e.clientId}));if(!(0,T.isEqual)(r,i)){let e=[];n.innerBlocks.map(((t,n)=>{e.push({slug:t.attributes.slug})})),l({tabsData:e});const t=[...o(n.clientId)];a(n.clientId,t,!1)}}render(){const{clientId:e,attributes:t,setAttributes:n,isSelectedBlockInRoot:a,getBlocks:o,replaceInnerBlocks:r,updateBlockAttributes:i,block:s}=this.props;let{className:c}=this.props;const{tabActive:p,buttonsAlign:b,tabsData:h,txtColor:f,overlayColor:v,overlayImg:E,overlayImgOpacity:y,autoplay:C,delay:_,speed:S,loop:B,effect:x,slidesPerView:I,spaceBetween:P,navigation:O,pagination:N,containerWidth:T,mousewheel:R,releaseOnEdges:D,pagination_type:H,clickable_pagination:V,breakpoints:z,freeMode:j,sticky:$,thumbs:M,thumbsSlidesPerView:U,thumbsSpaceBetween:Y,autoHeight:W,debug:q,direction:F}=t;c=l()(c,"wp-swiper__slides");let J=b;"start"===J?J="left":"end"===J&&(J="right");let L=1;const G=f?{color:f}:{};return wp.element.createElement(u.Fragment,null,wp.element.createElement(g.InspectorControls,null,wp.element.createElement(w.PanelBody,{title:(0,m.__)("Overlay Settings"),initialOpen:!1},wp.element.createElement(w.PanelRow,null,wp.element.createElement(g.MediaUploadCheck,null,wp.element.createElement(g.MediaUpload,{value:E,onSelect:e=>{let t=e.sizes.full.url;n({overlayImg:t})},type:"image",render:e=>wp.element.createElement(w.Button,{onClick:e.open,className:"button"},"Select overlay image")}))),wp.element.createElement(w.PanelRow,null,A(E)),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.Button,{isSecondary:!0,isSmall:!0,className:"block-library-cover__reset-button",onClick:()=>n({overlayImg:void 0})},(0,m.__)("Clear Media"))),wp.element.createElement(w.BaseControl,{label:(0,m.__)("Image Overlay Opacity","@@text_domain")},wp.element.createElement(w.RangeControl,{label:(0,m.__)("Opacity"),value:y,onChange:e=>n({overlayImgOpacity:e}),min:0,max:1,step:.01,required:!0})),wp.element.createElement(w.BaseControl,{label:(0,m.__)("Overlay Color","@@text_domain")},wp.element.createElement(w.ColorPicker,{color:v.rgb,onChangeComplete:e=>{n({overlayColor:e}),s.innerBlocks.map((t=>{i(t.clientId,{overlayColor:e})}))}}))),wp.element.createElement(w.PanelBody,{title:(0,m.__)("Color Settings"),initialOpen:!1},wp.element.createElement(w.BaseControl,{label:(0,m.__)("Text Color","@@text_domain")},wp.element.createElement(w.ColorPicker,{color:f,onChangeComplete:e=>n({txtColor:e.hex})}))),wp.element.createElement(w.PanelBody,{title:(0,m.__)("Swiper Settings"),initialOpen:!1},wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.RangeControl,{label:(0,m.__)("Container Max Width %"),help:(0,m.__)("Frontend: Set the max width for the content with text."),value:T,onChange:e=>{n({containerWidth:e}),s.innerBlocks.map((t=>{i(t.clientId,{containerWidth:e})}))},min:1,max:100,step:1,required:!0})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Show Navigation",checked:O,onChange:()=>{n({navigation:!O})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Auto Height",help:"Set to true and slider wrapper will adapt its height to the height of the currently active slide",checked:W,onChange:()=>{n({autoHeight:!W})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement("hr",null)),wp.element.createElement(w.PanelRow,null,wp.element.createElement("h2",null,"Direction Settings")),wp.element.createElement(w.SelectControl,{label:"Direction",help:"For vertical slider, Slides Per View should be set to 1",value:F,options:[{label:"Horizontal",value:"horizontal"},{label:"Vertical",value:"vertical"}],onChange:e=>{n({direction:e})}}),wp.element.createElement(w.PanelRow,null,wp.element.createElement("hr",null)),wp.element.createElement(w.PanelRow,null,wp.element.createElement("h2",null,"Pagination Settings")),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Show pagination",checked:N,onChange:()=>{n({pagination:!N})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.SelectControl,{label:"Type of pagination",value:H,options:[{label:"Bullets",value:"bullets"},{label:"Fraction",value:"fraction"},{label:"Progress Bar",value:"progressbar"}],onChange:e=>{n({pagination_type:e})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Clickable Pagination",checked:V,onChange:()=>{n({clickable_pagination:!V})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement("hr",null)),wp.element.createElement(w.PanelRow,null,wp.element.createElement("h2",null,"Slide Settings")),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.TextControl,{label:"Space Between",help:"Distance between slides in px.",value:P,onChange:e=>{n({spaceBetween:parseInt(e)})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.TextControl,{label:"Slides per view",help:"Number of slides per view (slides visible at the same time on slider's container). Can be a number or auto",value:I,onChange:e=>{n({slidesPerView:e})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement("hr",null)),wp.element.createElement(w.PanelRow,null,wp.element.createElement("h2",null,"Breakpoints")),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.TextareaControl,{label:"Responsive breakpoints (JSON Object)",help:"Allows to set different parameter for different responsive breakpoints (screen sizes). Not all parameters can be changed in breakpoints, only those which are not required different layout and logic, like slidesPerView, slidesPerGroup, spaceBetween, grid.rows. Such parameters like loop and effect won't work",value:z,onChange:e=>{n({breakpoints:e})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement("p",null,"Example: ",'{"720":{"slidesPerView":2}}'," - Notice the double quotes")),wp.element.createElement(w.PanelRow,null,wp.element.createElement("hr",null)),wp.element.createElement(w.PanelRow,null,wp.element.createElement("h2",null,"Slider Settings")),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Auto Play",checked:C,onChange:()=>{n({autoplay:!C})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Loop",checked:B,onChange:()=>{n({loop:!B})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.TextControl,{label:"Delay",value:_,type:"number",onChange:e=>{n({delay:parseInt(e)})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.TextControl,{label:"Speed",value:S,type:"number",onChange:e=>{n({speed:parseInt(e)})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.SelectControl,{label:"Effect (Under Consttruction)",value:x,options:[{label:"Slide",value:"slide"},{label:"Fade",value:"fade"},{label:"Cube",value:"cube"},{label:"Coverflow",value:"coverflow"},{label:"Flip",value:"flip"}],onChange:e=>{n({effect:e})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Free Mode",help:"Enables free mode functionality",checked:j,onChange:()=>{n({freeMode:!j})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Sticky",help:"Set to enabled to enable snap to slides positions in free mode",disabled:!j,checked:$,onChange:()=>{n({sticky:!$})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement("hr",null)),wp.element.createElement(w.PanelRow,null,wp.element.createElement("h2",null,"Mouse Settings")),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Mouse Wheel",help:"Enables navigation through slides using mouse wheel.",checked:R,onChange:()=>{n({mousewheel:!R})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Release On Edges",help:"Set to true and swiper will release mousewheel event and allow page scrolling when swiper is on edge positions (in the beginning or in the end) NOTE: Mouse Wheel must be set to true for this to work.",checked:D,onChange:()=>{n({releaseOnEdges:!D})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement("hr",null)),wp.element.createElement(w.PanelRow,null,wp.element.createElement("h2",null,"Thumbs Settings")),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.ToggleControl,{label:"Thumbs",help:"Enables thumbs to be used as pagination.",checked:M,onChange:()=>{n({thumbs:!M})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.TextControl,{disabled:!M,label:"Space Between",help:"Distance between slides in px.",value:Y,onChange:e=>{n({thumbsSpaceBetween:parseInt(e)})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.TextControl,{disabled:!M,label:"Slides per view",help:"Number of slides per view (slides visible at the same time on slider's container). Can be a number or auto",value:U,onChange:e=>{n({thumbsSlidesPerView:parseInt(e)})}})),wp.element.createElement(w.PanelRow,null,wp.element.createElement("hr",null)),wp.element.createElement(w.PanelRow,null,wp.element.createElement("h2",null,"Dev Tools")),wp.element.createElement(w.ToggleControl,{label:"Debug",help:"Show (console.log) config JSON object for each slider",checked:q,onChange:()=>{n({debug:!q})}}))),wp.element.createElement("div",{className:c,"data-tab-active":p},wp.element.createElement("div",{className:"wb-tabs-buttons-wrapper",style:G},wp.element.createElement("div",{className:l()("wb-tabs-buttons",`wb-tabs-buttons-align-${b}`)},h.map(((e,t)=>{const{slug:o}=e,r=p===o;return wp.element.createElement("div",{className:l()("wb-tabs-buttons-item",r?"wb-tabs-buttons-item-active":""),key:`tab_button_${t}`,onClick:()=>n({tabActive:o})},wp.element.createElement("h4",null,"Slide ",L++),wp.element.createElement(k,{show:a,tooltipText:(0,m.__)("Remove slide?","@@text_domain"),onRemove:()=>{this.removeTab(t)}}))})),a?wp.element.createElement(w.Tooltip,{text:(0,m.__)("Add Slide","@@text_domain")},wp.element.createElement(w.Button,{icon:"insert",onClick:()=>{let t=[];const l=h.length+1;t=[...h],t.push({slug:`slide-${l}`});const a=(0,d.createBlock)("da/wp-swiper-slide",{slug:`slide-${l}`});let i=o(e);i=[...i,a],r(e,i,!1),n({tabsData:t})}})):""),wp.element.createElement("div",{className:"wp-swiper__slide-content"},wp.element.createElement(g.InnerBlocks,{template:this.getTabsTemplate(),allowedBlocks:["da/wp-swiper-slide"]})))),wp.element.createElement("style",null,`\n                    [data-block="${this.props.clientId}"] .wp-swiper__slides .wp-swiper__slide-content .block-editor-inner-blocks .block-editor-block-list__layout [data-tab="${p}"] {\n                        display: block;\n                    }\n                    `))}}const D=(0,b.compose)([(0,h.withSelect)(((e,t)=>{const{getBlock:n,isBlockSelected:l,hasSelectedInnerBlock:a}=e("core/block-editor"),{clientId:o}=t;return{blocks:e(g.store).getBlocks(),block:n(o),isSelectedBlockInRoot:l(o)||a(o,!0)}})),(0,h.withDispatch)(((e,t,n)=>{const{updateBlockAttributes:l,removeBlock:a,replaceInnerBlocks:o,moveBlockToPosition:r,moveBlocksDown:i}=e("core/block-editor"),{getBlocks:s}=n.select("core/block-editor");return{moveBlocksDown:i,moveBlockToPosition:r,replaceInnerBlocks:o,getBlocks:s,updateBlockAttributes:l,removeBlock:a}}))])(R);function H(){return H=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var l in n)Object.prototype.hasOwnProperty.call(n,l)&&(e[l]=n[l])}return e},H.apply(this,arguments)}const{Component:V}=wp.element,{InnerBlocks:z}=wp.blockEditor,{__:j}=wp.i18n,{name:$}=e,M={...e,title:j("WP Swiper","@@text_domain"),description:j("Separate content on the tabs with titles.","@@text_domain"),icon:wp.element.createElement("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},wp.element.createElement("path",{d:"M20 17.4444C20 17.857 19.8314 18.2527 19.5314 18.5444C19.2313 18.8361 18.8243 19 18.4 19H5.6C5.17565 19 4.76869 18.8361 4.46863 18.5444C4.16857 18.2527 4 17.857 4 17.4444V6.55556C4 6.143 4.16857 5.74733 4.46863 5.45561C4.76869 5.16389 5.17565 5 5.6 5H9.6L11.2 7.33333H18.4C18.8243 7.33333 19.2313 7.49722 19.5314 7.78894C19.8314 8.08067 20 8.47633 20 8.88889V17.4444Z",stroke:"currentColor",fill:"transparent","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"})),keywords:[j("swiper","@@text_domain"),j("slider","@@text_domain")],edit:D,save:class extends V{render(){let{className:e}=this.props.attributes;const{align:t,overlayColor:n,overlayImg:a,overlayImgOpacity:o,slidesPerView:r,spaceBetween:i,txtColor:s,autoplay:c,delay:p,speed:m,loop:u,effect:d,navigation:w,pagination:g,mousewheel:b,releaseOnEdges:h,pagination_type:f,clickable_pagination:v,breakpoints:E,thumbs:y,thumbsSpaceBetween:k,thumbsSlidesPerView:C,autoHeight:_,freeMode:S,sticky:B,debug:x,direction:I}=this.props.attributes;e=l()(e,"wp-swiper"),t&&(e=l()(e,`align${t}`));const P=a?{backgroundImage:`url(${a})`}:{};o&&(P.opacity=o);const O=s?{color:s}:{};let N={"data-thumbsconfig":{}},A={"data-slidesperview":r,"data-navigation":w,"data-pagination":g,"data-autoplay":c,"data-delay":p,"data-speed":m,"data-loop":u,"data-effect":d};return x&&(A["data-debug"]=x),S&&B&&(A["data-sticky"]=B),A["data-direction"]=I,A["data-freemode"]=S,A["data-autoheight"]=_,A["data-spacebetween"]=i,A["data-mousewheel"]=b,A["data-releaseonedges"]=h,A["data-paginationtype"]="bullets"!=f?f:"bullets",A["data-clickablepagination"]=!!v||"",void 0!==E&&""!=E&&(A["data-breakpoints"]=JSON.stringify(E.replace(/^\s+|\s+|\n$/gm,"")),A["data-breakpoints"]=A["data-breakpoints"].substring(1,A["data-breakpoints"].length-1)),y&&(N["data-thumbsconfig"]=JSON.stringify({spaceBetween:k,slidesPerView:C,freeMode:!0,watchSlidesProgress:!0,navigation:!1})),wp.element.createElement(wp.element.Fragment,null,wp.element.createElement("div",{className:e},this.getOverlayImg(a,P),wp.element.createElement("div",{className:"wp-swiper__wrapper",style:O},wp.element.createElement("div",H({className:"swiper-container swiper","data-swiperconfig":JSON.stringify(A)},N,A),wp.element.createElement("div",{className:"swiper-wrapper"},wp.element.createElement(z.Content,null))),this.getNavigation(this.props),this.getPagination(this.props)),this.getQuoteSVG(this.props),y&&wp.element.createElement("div",{className:"wp-swiper__thumbs"},wp.element.createElement("div",{className:"wp-swiper__wrapper"},wp.element.createElement("div",{className:"swiper-container swiper"},wp.element.createElement("div",{className:"swiper-wrapper"}))))))}getOverlayImg(e,t){if(void 0!==e)return wp.element.createElement("div",{className:"wp-swiper__overlay-img",style:t})}getPagination(e){let{attributes:t}=e;const{pagination:n}=t;if(n)return wp.element.createElement("div",{className:"swiper-pagination"})}getNavigation(e){let{attributes:t}=e;const{navigation:n}=t;if(n)return wp.element.createElement(wp.element.Fragment,null,wp.element.createElement("div",{className:"swiper-button-prev"}),wp.element.createElement("div",{className:"swiper-button-next"}))}getQuoteSVG(e){let{attributes:t}=e,{className:n}=t;if(n=n?n.toString():"",-1!==n.indexOf("is-style-testimonials"))return wp.element.createElement(wp.element.Fragment,null,wp.element.createElement("div",{className:"wp-swiper__quotes"},wp.element.createElement("svg",{"aria-hidden":"true",focusable:"false","data-prefix":"fas","data-icon":"quote-right",role:"img",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 512 512",class:"svg-inline--fa fa-quote-right fa-w-16 fa-5x"},wp.element.createElement("path",{fill:"currentColor",d:"M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z",class:""}))))}},deprecated:p};M.attributes={...M.attributes,freeMode:{type:"boolean",default:!1},mousewheel:{type:"boolean",default:!1},releaseOnEdges:{type:"boolean",default:!1},pagination_type:{type:"string",default:"bullets"}};const U=JSON.parse('{"name":"da/wp-swiper-slide","parent":["da/wp-swiper-slides"],"category":"media","supports":{"html":false,"className":false,"anchor":true,"inserter":false,"reusable":false},"attributes":{"align":{"type":"string","default":"undefined"},"slideImgId":{"type":"number"},"slideImg":{"type":"string"},"slug":{"type":"string"},"contentValign":{"type":"string","default":""},"contentHalign":{"type":"string","default":""},"contentVHalign":{"type":"string"},"overlayColor":{"type":"object","default":{"rgb":{"r":0,"g":0,"b":0,"a":0}}},"containerWidth":{"type":"number"}}}'),Y=wp.keycodes,W=function(e){const{label:t=(0,m.__)("Change matrix alignment"),onChange:n="undefined",value:l="center",isDisabled:a}=e,o=wp.element.createElement(w.__experimentalAlignmentMatrixControl.Icon,{value:l}),r="block-editor-block-alignment-matrix-control",i=`${r}__popover`;return wp.element.createElement(w.Dropdown,{position:"bottom right",className:r,popoverProps:{className:i,isAlternate:!0},renderToggle:e=>{let{onToggle:n,isOpen:l}=e;return wp.element.createElement(w.ToolbarButton,{onClick:n,"aria-haspopup":"true","aria-expanded":l,onKeyDown:e=>{l||e.keyCode!==Y.DOWN||(e.preventDefault(),e.stopPropagation(),n())},label:t,icon:o,showTooltip:!0,disabled:a})},renderContent:()=>wp.element.createElement(w.__experimentalAlignmentMatrixControl,{hasFocusBorder:!1,onChange:n,value:l})})},q={"top left":"is-position-top-left","top center":"is-position-top-center","top right":"is-position-top-right","center left":"is-position-center-left","center center":"is-position-center-center",center:"is-position-center-center","center right":"is-position-center-right","bottom left":"is-position-bottom-left","bottom center":"is-position-bottom-center","bottom right":"is-position-bottom-right"};function F(e){return function(e){return!e||"center center"===e||"center"===e}(e)?"":q[e]}function J(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}class L extends u.Component{constructor(){super(...arguments),J(this,"onSelectImage",(e=>{let t=e.sizes.full.url;this.props.setAttributes({slideImg:t})})),J(this,"isEmpty",(e=>!0)),J(this,"getOverlayImage",(e=>(this.props.attributes.slideImg&&(e.backgroundImage=`url(${this.props.attributes.slideImg})`),e))),J(this,"getOverlayColor",(e=>{if(this.props.attributes.overlayColor){let{overlayColor:t}=this.props.attributes;e.backgroundColor=`rgba(${t.rgb.r}, ${t.rgb.g}, ${t.rgb.b}, ${t.rgb.a})`}return e}))}render(){const{setAttributes:e,hasChildBlocks:t,attributes:n}=this.props;let{className:a=""}=this.props;const{slideImg:o,overlayColor:r,contentVHalign:i}=n;a=l()(a,"wp-swiper__slide"),a=l()(a,{"has-image":this.isEmpty(o)}),a=l()(a,F(i));let s={},c={};return s=this.getOverlayImage(s),c=this.getOverlayColor(c),wp.element.createElement(u.Fragment,null,wp.element.createElement(g.InspectorControls,null,wp.element.createElement(w.PanelBody,{title:(0,m.__)("Image Settings")},wp.element.createElement(w.BaseControl,{label:(0,m.__)("Slide Image","@@text_domain")},wp.element.createElement(w.PanelRow,null,wp.element.createElement(g.MediaUploadCheck,null,wp.element.createElement(g.MediaUpload,{value:o,onSelect:this.onSelectImage,type:"image",render:e=>wp.element.createElement(w.Button,{onClick:e.open,className:"button"},"Select slide image")}))),wp.element.createElement(w.PanelRow,null,A(o)),wp.element.createElement(w.PanelRow,null,wp.element.createElement(w.Button,{isSecondary:!0,isSmall:!0,className:"block-library-cover__reset-button",onClick:()=>e({slideImg:void 0})},(0,m.__)("Clear Media")))))),wp.element.createElement(g.BlockControls,{group:"block"},wp.element.createElement(W,{label:(0,m.__)("Change content position"),value:i,onChange:t=>{e({contentVHalign:t})}})),wp.element.createElement("div",{className:a},o&&wp.element.createElement("div",{className:"wp-swiper__slide-overlay wp-swiper__slide-overlay--image",style:s}),r.rgb.a>0&&wp.element.createElement("div",{className:"wp-swiper__slide-overlay wp-swiper__slide-overlay--color",style:c}),wp.element.createElement(g.InnerBlocks,{renderAppender:t?void 0:()=>wp.element.createElement(g.InnerBlocks.ButtonBlockAppender,null)})))}}const G=(0,h.withSelect)(((e,t)=>{const{clientId:n}=t,{getBlockOrder:l}=e("core/block-editor");return{hasChildBlocks:l(n).length>0}}))(L),{applyFilters:Z}=wp.hooks,{Component:K}=wp.element,{InnerBlocks:Q}=wp.blockEditor,{name:X}=U,{__:ee}=wp.i18n,{name:te}=U,ne={...U,title:ee("Slide","@@text_domain"),description:ee("A single slide within a wp-swiper block.","@@text_domain"),icon:"admin",getEditWrapperProps:e=>({"data-tab":e.slug}),edit:G,save:class extends K{render(){const{overlayColor:e,slug:t,slideImg:n,contentVHalign:a,containerWidth:o}=this.props.attributes;let r="wp-swiper__slide swiper-slide";""!=a&&void 0!==a&&(r=l()(r,F(a)));const i=n?{backgroundImage:`url(${n})`,backgroundSize:"cover"}:{},s=o?{maxWidth:`${o}%`}:null,c=e?{backgroundColor:`rgba(${e.rgb.r}, ${e.rgb.g}, ${e.rgb.b}, ${e.rgb.a})`}:{};return wp.element.createElement("div",{className:r,"data-tab":t,style:i},wp.element.createElement("div",{className:"wp-swiper__overlay-color",style:c}),wp.element.createElement("div",{className:"wp-swiper__slide-content",style:s},wp.element.createElement(Q.Content,null)))}}},{registerBlockType:le,registerBlockStyle:ae}=wp.blocks;le($,M),le(te,ne),ae($,[{name:"testimonials",label:"Testimonials"}])})()})();