<!-- Example #1 A simple XForms search form -->
<h:html xmlns:h="http://www.w3.org/1999/xhtml"
        xmlns="http://www.w3.org/2002/xforms">
<h:head>
 <h:title>Search</h:title>
 <model>
  <submission action="xforms-1-process.php?action=search" method="application/x-www-form-urlencoded" id="ssssss"/>
 </model>
</h:head>
<h:body>
 <h:p>
  <input ref="q"><label>Find</label></input>
  <submit submission="ssssss"><label>Go</label></submit>
 </h:p>
</h:body>
</h:html>
