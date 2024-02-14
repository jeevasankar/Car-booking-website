
function print_r()
{
    var divContents = document.getElementById("print_area").innerHTML; 
    
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
           // a.document.write(head);
           a.document.write('<body width="100">'); 
           a.document.write('<center>'); 
			//a.document.write('<div class="header"><h4>KONGU ENGINEERING COLLEGE,PERUNDURAI,ERODE-638 060</h4><h5>EXAM DETAILS</h5><h6>2019-2020</h6></div>');
            a.document.write(divContents); 
            a.document.write('</center>'); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
}
function exportTableToExcel(tableID, filename = '')
{
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob)
	{
        var blob = new Blob(['\ufeff', tableHTML], 
		{
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }
    else
	{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
