
jQuery(document).ready(function(){

 $(".tableDiv").each(function() {      
                    var Id = $(this).get(0).id;
                    var maintbheight = 555;
                    var maintbwidth = 911;

                    $("#" + Id + " .FixedTables").fixedTable({
                        width: maintbwidth,
                        height: maintbheight,
                        fixedColumns: 1,
                        // header style
                        classHeader: "fixedHead",
                        // footer style        
                        classFooter: "fixedFoot",
                        // fixed column on the left        
                        classColumn: "fixedColumn",
                        // the width of fixed column on the left      
                        fixedColumnWidth: 150,
                        // table's parent div's id           
                        outerId: Id,
                        // tds' in content area default background color                     
                        Contentbackcolor: "#FFFFFF",
                        // tds' in content area background color while hover.     
                        Contenthovercolor: "#99CCFF", 
                        // tds' in fixed column default background color   
                        fixedColumnbackcolor:"#187BAF", 
                        // tds' in fixed column background color while hover. 
                        fixedColumnhovercolor:"#99CCFF"  
                    });        
                });

});



