

            /*/全选
          $(".section4-bottom-check").click(function() {
             $("input[name='check1']").prop("checked", this.checked);
           });

            //只要某个选项没选就取消全选
             $("input[name='check1']").click(function() {
                 var check1 = $("input[name='check1']");
             $(".section4-bottom-check").prop("checked" , check1.length == check1.filter(":checked").length ? true :false);
         });

        
      	 $('.section4-box-js').click(function(){
           if (!$('.section4-box-check').is(':checked')){ 
               alert("请选择商品");
               return false;
           }
        })*/
