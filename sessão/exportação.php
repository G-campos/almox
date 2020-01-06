//a classe 'remove' em elementos que não devem aparecer no excel
//(inclusive em inputs type='hidden')
//id da <table> e nome do arquivo a ser gerado

function exportaExcel(id,nome){ 
    var hoje = new Date();
    var data = ('0'+hoje.getDate()).slice(-2)+"-"+('0'+(hoje.getMonth()+1)).slice(-2)+"-"+hoje.getFullYear();

    var nome_arquivo = nome+"_"+data+".xls"; //nome final do arquivo
    var meta = '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />';
    var html = $("#"+id).clone();

    html.find('.remove').remove();
    html.find('a').each(function() {
        var txt = $(this).text();
        $(this).after(txt).remove();
    });
    html.find('input, textarea').each(function() {
        var txt = $(this).val().replace(/\r\n|\r|\n/g,"<br>");
        $(this).after(txt).remove();
    });
    html.find('select').each(function() {
        var txt = $(this).find('option:selected').text();
        $(this).after(txt).remove();
    });
    html.find('br').attr('style', "mso-data-placement:same-cell");
    html = "<table>"+html.html()+"</table>";

    var uri = 'data:application/vnd.ms-excel,'+encodeURIComponent(meta+html);
    var a = $("<a>", {href: uri, download: nome_arquivo});
    $(a)[0].click();
}
