<html>
<head>
<script language="javascript">
function WriteToFile()
{
var fso = new ActiveXObject("Scripting.FileSystemObject");
var s = fso.CreateTextFile("D:\\dest.txt", true);
s.WriteLine('Hello');
s.Close();
}
</script>
</head>
<body onLoad="WriteToFile()">

</body>
</html>