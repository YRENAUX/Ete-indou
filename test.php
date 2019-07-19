
 <!DOCTYPE html>
<title>Example</title>

<!-- Styles --> 
<style>
.example1 {
 height: 500px;  
 width: 100%;
 overflow: hidden;
 position: relative;
}
.example1 h3 {
    font-family: arial;
    left: -300px;
 font-size: 12em;
 font-weight: 900;
 letter-spacing: -120px;
 word-spacing: -100px;
 color: #FF823B;
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateY(100%);
 -webkit-transform:translateY(100%);    
 transform:translateY(100%);
 /* Apply animation to this element */  
 -moz-animation: example1 30s linear infinite;
 -webkit-animation: example1 30s linear infinite;
 animation: example1 30s linear infinite;
 writing-mode: vertical-rl;
text-orientation: upright;
}

/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateY(100%); }
 100% { -moz-transform: translateY(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateY(100%); }
 100% { -webkit-transform: translateY(-100%); }
}
@keyframes example1 {
 0%   { 
 -moz-transform: translateY(100%); /* Firefox bug fix */
 -webkit-transform: translateY(100%); /* Firefox bug fix */
 transform: translateY(100%);       
 }
 100% { 
 -moz-transform: translateY(-100%); /* Firefox bug fix */
 -webkit-transform: translateY(-100%); /* Firefox bug fix */
 transform: translateY(-300%); 
 }
}
</style>

<!-- HTML -->   
<div class="example1">
<h3>ETE&nbsp;INDIEN</h3>
</div>
