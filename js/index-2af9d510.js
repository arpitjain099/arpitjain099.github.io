import{Q as x,R as v,T as C}from"./index-2e06e8b9.js";function b(t){const r=t-1;return r*r*r+1}function M(t){return--t*t*t*t*t+1}/*! *****************************************************************************
Copyright (c) Microsoft Corporation.

Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR
OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
PERFORMANCE OF THIS SOFTWARE.
***************************************************************************** */function S(t,r){var c={};for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&r.indexOf(n)<0&&(c[n]=t[n]);if(t!=null&&typeof Object.getOwnPropertySymbols=="function")for(var o=0,n=Object.getOwnPropertySymbols(t);o<n.length;o++)r.indexOf(n[o])<0&&Object.prototype.propertyIsEnumerable.call(t,n[o])&&(c[n[o]]=t[n[o]]);return c}function j(t,{delay:r=0,duration:c=400,easing:n=C}={}){const o=+getComputedStyle(t).opacity;return{delay:r,duration:c,easing:n,css:d=>`opacity: ${d*o}`}}function q(t,{delay:r=0,duration:c=400,easing:n=b,x:o=0,y:d=0,opacity:y=0}={}){const a=getComputedStyle(t),i=+a.opacity,l=a.transform==="none"?"":a.transform,p=i*(1-y);return{delay:r,duration:c,easing:n,css:(e,f)=>`
			transform: ${l} translate(${(1-e)*o}px, ${(1-e)*d}px);
			opacity: ${i-p*f}`}}function T(t,{delay:r=0,duration:c=400,easing:n=b}={}){const o=getComputedStyle(t),d=+o.opacity,y=parseFloat(o.height),a=parseFloat(o.paddingTop),i=parseFloat(o.paddingBottom),l=parseFloat(o.marginTop),p=parseFloat(o.marginBottom),e=parseFloat(o.borderTopWidth),f=parseFloat(o.borderBottomWidth);return{delay:r,duration:c,easing:n,css:s=>`overflow: hidden;opacity: ${Math.min(s*20,1)*d};height: ${s*y}px;padding-top: ${s*a}px;padding-bottom: ${s*i}px;margin-top: ${s*l}px;margin-bottom: ${s*p}px;border-top-width: ${s*e}px;border-bottom-width: ${s*f}px;`}}function P(t){var{fallback:r}=t,c=S(t,["fallback"]);const n=new Map,o=new Map;function d(a,i,l){const{delay:p=0,duration:e=u=>Math.sqrt(u)*30,easing:f=b}=x(x({},c),l),s=i.getBoundingClientRect(),g=a.left-s.left,h=a.top-s.top,w=a.width/s.width,_=a.height/s.height,O=Math.sqrt(g*g+h*h),m=getComputedStyle(i),k=m.transform==="none"?"":m.transform,F=+m.opacity;return{delay:p,duration:v(e)?e(O):e,easing:f,css:(u,$)=>`
				opacity: ${u*F};
				transform-origin: top left;
				transform: ${k} translate(${$*g}px,${$*h}px) scale(${u+(1-u)*w}, ${u+(1-u)*_});
			`}}function y(a,i,l){return(p,e)=>(a.set(e.key,{rect:p.getBoundingClientRect()}),()=>{if(i.has(e.key)){const{rect:f}=i.get(e.key);return i.delete(e.key),d(f,p,e)}return a.delete(e.key),r&&r(p,e,l)})}return[y(o,n,!1),y(n,o,!0)]}export{j as a,P as b,b as c,q as f,M as q,T as s};
