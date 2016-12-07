/*

  thirteentwelve.com

*/
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ reset */
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, dialog, figure, footer, header,
hgroup, menu, nav, section,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  font-size: 100%;
  vertical-align: baseline;
  background: transparent; }

html {
  overflow-y: scroll;
  overflow: -moz-scrollbars-vertical; }

body {
  line-height: 1; }

article, aside, dialog, figure, footer, header,
hgroup, nav, section {
  display: block; }

blockquote, q {
  quotes: none; }

ul, li {
  list-style: none; }

@-ms-viewport {
  width: device-width; }

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ variables */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ colors */
/* Main Color List - try not to use */
/* Colors - Grayscale */
/* Colors by usage - use these! */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ functions/mixins */
/*
  @mixin icon-type

  Inserts an icon class with a name and optional width/height

  Parameters:
  $type - name of the icon
  $minWidth - optional, number, width of the icon
  $minHeight - optional, number, height of the icon
  $include - force include of SVG data
*/
/*
  @mixin background-image

  Inserts an encoded SVG background image from the $icons sass map

  Parameters:
  $file_name - name of icon
  $include - include SVG data in stylesheet, overrides global $include_icons var
*/
/*
  @mixin breakpoint

  Inserts a media query block

  Parameters:
  $point - name of the breakpoint
*/
/*
  @mixin transition

  Inserts vendor transition

  Parameters:
  $transition - transitions
*/
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ fonts */
/* ####################################################
 * Site font stacks
*/
/* ####################################################
 * Site font weights
*/
/* ####################################################
 * Font setup mixins
*/
/* ####################################################
 * Font styles declared
*/
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ placeholders */
.container,
#thirteentwelve {
  max-width: 860px;
  margin-left: auto;
  margin-right: auto; }
  @media (max-width: 932px) {
    .container,
    #thirteentwelve {
      max-width: initial;
      padding-left: 40px;
      padding-right: 40px; } }
  @media (max-width: 520px) {
    .container,
    #thirteentwelve {
      padding-left: 20px;
      padding-right: 20px; } }

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ general styles */
h1, h2, p, ul, small {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 18px;
  line-height: 27px;
  font-weight: 400;
  margin-top: 20px; }
  @media (max-width: 520px) {
    h1, h2, p, ul, small {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 15px;
      line-height: 20px;
      font-weight: 400;
      margin-top: 15px; } }

h1,
h2,
h3,
b,
strong {
  font-weight: bold; }

h1,
h2 {
  margin-top: 60px; }
  @media (max-width: 520px) {
    h1,
    h2 {
      margin-top: 30px; } }

h2[data-reveal-trigger] {
  cursor: pointer; }

a {
  text-decoration: underline;
  color: #ff5400; }

a:hover,
a:active,
a:focus {
  color: #666666; }

img {
  border: 0 none;
  opacity: 1;
  transition: opacity .25s; }

img[data-src] {
  opacity: 0; }

small {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 16px;
  font-weight: 400;
  display: block;
  color: #666666; }

.e404 {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 72px;
  line-height: 72px;
  font-weight: 400;
  text-align: center;
  padding-top: 20px;
  padding-bottom: 20px; }

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ modules */
.intro {
  display: flex;
  flex-flow: row wrap;
  justify-content: flex-start;
  align-content: flex-start;
  margin-bottom: 10px; }

.intro__col {
  flex: 0 0 50%;
  width: 50%;
  padding-right: 20px; }
  @media (max-width: 520px) {
    .intro__col {
      flex: 0 0 100%;
      width: 100%; } }
  .intro__col:first-child {
    flex: 0 0 100%;
    width: 100%;
    padding-right: 0; }
  .intro__col p {
    max-width: 90%; }
  .intro__col ul {
    padding-left: 1.1em; }
  .intro__col li {
    list-style-type: disc; }

.key-engagements {
  margin-top: -40px; }
  .key-engagements li {
    margin-top: 60px; }
  .key-engagements .key-engagements__img {
    position: relative;
    width: 185px;
    height: 79px; }
  .key-engagements .key-engagements__img::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 183px;
    border: 1px solid rgba(0, 0, 0, 0.25); }
  .key-engagements img {
    display: block;
    width: 185px;
    height: 79px; }
  .key-engagements h3 {
    margin-top: 15px;
    font-weight: normal;
    color: #999999; }
  .key-engagements h3 b {
    color: #1a1a1a; }
  .key-engagements h3 i {
    font-style: normal; }
  .key-engagements p {
    max-width: 90%; }

.work {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 20px;
  font-weight: 400;
  display: flex;
  flex-flow: row wrap;
  justify-content: flex-start;
  align-content: flex-start;
  margin: -20px -20px 0; }
  @media (max-width: 932px) {
    .work {
      margin-right: -10px;
      margin-left: -10px; } }
  @media (max-width: 520px) {
    .work {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 13px;
      line-height: 16px;
      font-weight: 400; } }
  .work li {
    flex: 0 0 185px;
    width: 185px;
    margin: 40px 20px 0; }
    @media (max-width: 932px) {
      .work li {
        flex: 0 0 auto;
        width: calc((100vw - 120px)/3);
        margin-right: 10px;
        margin-left: 10px; } }
    @media (max-width: 520px) {
      .work li {
        flex: 0 0 auto;
        width: calc((100vw - 60px)/2);
        margin-right: 10px;
        margin-left: 10px; } }
  .work .js-all {
    position: absolute;
    visibility: hidden;
    opacity: 0;
    transition: opacity .5s; }
  .work.js-reveal .js-all {
    position: static;
    visibility: visible;
    opacity: 1; }
  .work .work__meta {
    margin-top: 10px; }
  .work .work__img {
    position: relative;
    height: 0;
    padding-bottom: 42.7027027%; }
  .work .work__img::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    border: 1px solid rgba(0, 0, 0, 0.25); }
  .work img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover; }
  .work a svg {
    display: inline-block;
    width: 18px;
    height: 9px;
    margin-left: 5px; }
  .work a {
    color: #ff5400; }
  .work a:hover,
  .work a:focus {
    color: #666666; }

.social {
  text-align: center; }
  .social li {
    display: inline-block;
    margin-left: 5px;
    margin-right: 5px; }
  .social a {
    color: #1a1a1a; }
  .social a:hover,
  .social a:focus {
    color: #ff5400; }
  .social svg {
    display: inline-block;
    width: auto;
    height: 20px; }
  .social a[title='Linked In'] svg {
    position: relative;
    top: -1px; }

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ layout */
html,
body {
  min-width: 320px;
  overflow-x: hidden; }
  @media (max-width: 520px) {
    html,
    body {
      overflow-x: auto; } }

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 18px;
  line-height: 27px;
  font-weight: 400;
  color: #1a1a1a;
  background: #fff;
  -moz-font-feature-settings: "kern";
  -webkit-font-feature-settings: "kern";
  -ms-font-feature-settings: "kern";
  -o-font-feature-settings: "kern";
  font-feature-settings: "kern";
  font-kerning: normal;
  text-rendering: optimizeLegibility;
  font-variant-ligatures: common-ligatures;
  -webkit-text-size-adjust: 100%; }
  body:after {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    width: 1px;
    height: 1px;
    margin: -1px 0 0 -1px;
    position: absolute;
    left: -1px;
    top: -1px; }

@media (min-width: 933px) {
  head {
    font-family: "large"; }
  body:after {
    content: "large"; } }

@media (max-width: 932px) {
  head {
    font-family: "medium"; }
  body:after {
    content: "medium"; } }

@media (max-width: 520px) {
  head {
    font-family: "small"; }
  body:after {
    content: "small"; } }

#thirteentwelve {
  position: relative; }

#content {
  display: block; }

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ sections */
header {
  padding-top: 60px; }
  @media (max-width: 520px) {
    header {
      padding-top: 20px; } }
  header a,
  header svg {
    display: block;
    width: 422px;
    height: 86px;
    margin: 0 auto; }
    @media (max-width: 520px) {
      header a,
      header svg {
        width: 100%;
        height: auto; } }

footer {
  margin-top: 140px;
  padding-bottom: 20px; }
  @media (max-width: 520px) {
    footer {
      margin-top: 50px; } }
  footer .bee {
    display: block;
    margin: 20px auto -10px;
    width: 80px;
    height: 70px; }
  footer small {
    display: block;
    text-align: center;
    margin-top: 10px; }
