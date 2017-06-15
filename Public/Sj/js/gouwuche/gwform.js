//地区
     new PCAS('location_p', 'location_c', 'location_a', '北京市', '', '');　
   //命名                  
          var username_1 = $('input[name="username"]'),
              number_1 = $('input[name="number"]'),
              canpin_1 = $('input[name="product"]'),
              address_1 = $('input[name="address"]');
  //用户名           
           $(username_1).focus(function(){
          $(this).next().removeClass('colour-input1').addClass('colour-input2'); 
           }).blur(function(){
            if ($(this).val().length >= 2 && $(this).val().length <=10 && $(this).val() !='') {
              $(this).next().text('输入正确').removeClass('colour-input1').addClass('colour-input4'); 
            }else{
                $(this).next().text('请输入正确的姓名').removeClass('colour-input1').removeClass('colour-input4').addClass('colour-input3'); 
                return false;
            }
           })
  //手机号
           $(number_1).focus(function(){
              $(this).next().removeClass('colour-input1').addClass('colour-input2');

            }).blur(function(){
              if($(this).val().match(/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/) && $(this).val()!=''){
                $(this).next().text('输入正确').removeClass('colour-input1').addClass('colour-input4');
              }else{
              $(this).next().text('请输入正确的手机格式号码').removeClass('colour-input1').removeClass
              ('colour-input4').addClass('colour-input3');  
              return false;
              }
            })
      
  //详细地址
              $(address_1).focus(function(){
            $(this).next().removeClass('colour-input1').addClass('colour-input2'); 

           }).blur(function(){
            if ($(this).val().length >= 2 && $(this).val().length <=300  && $(this).val() !='') {
              $(this).next().text('输入正确').removeClass('colour-input1').addClass('colour-input4'); 
            }else{
                $(this).next().text('请填写收货地址').removeClass('colour-input1').removeClass('colour-input4').addClass('colour-input3'); 
              return false;
            }
           }) 


            //全选
          $(".section4-bottom-check").click(function() {
             $("input[name='check1']").prop("checked", this.checked);
           });

            //只要某个选项没选就取消全选
             $("input[name='check1']").click(function() {
                 var check1 = $("input[name='check1']");
             $(".section4-bottom-check").prop("checked" , check1.length == check1.filter(":checked").length ? true :false);
         });


   //按钮验证
             $('.section4-box-js').click(function(){
               if ($(username_1).val()=='') {
                  alert('名字不能为空');
                  return false;
               }else if($(number_1).val()==''){
                  alert('手机号码不能为空');
                  return false;
               }else if($(number_1).val().length<11){
                  alert('手机号码不正确');
                  return false;            
               }else if($(address_1).val()==''){
                  alert('详细地址不能为空');
                  return false;
               }if (!$('.section4-box-check').is(':checked')){ 
                  alert("请选择商品");
                  return false;
               }else{
                  alert('提交成功');
               }
            })
 



