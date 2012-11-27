 jQuery(document).ready(function(){ 

   // this "tableDiv" must be the table's class
                $(".tableDiv").each(function() {      
                    var Id = $(this).get(0).id;
                    var maintbheight = 300;
                    var maintbwidth = 500;

                    $("#" + Id + " .FixedTables").fixedTable({
                        width: maintbwidth,
                        height: maintbheight,
                        fixedColumns: 3,
                        // header style
                        classHeader: "cabecera",
                        // footer style        
                        classFooter: "pie",
                        // fixed column on the left        
                        classColumn: "fixedColumna",
                        // the width of fixed column on the left      
                        fixedColumnWidth: 130,
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
