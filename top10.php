 <!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php require_once "head.php"?>
        
        <link rel="stylesheet" href="css/top_style.css">
        
    </head>
  

    <body>  
       <?php require_once "blocks/header.php"?>
        
       <!--  $connection = new Mongo();
        $con = new MongoClient();
$list= $con-> baza1-> listCollections();
foreach ($list as $collection) {
    echo "<p>" . $collection . "</p>";} -->
        
        <div class= "layout">    
        
              <div class="content">
                  <div id="tdlApp">
                  <input type="text" placeholder="Имя" id="name" name="name"><br/>
                      <div class="tdlDiv">
                          <ul class="tdList list-unstyled">
                              
                          </ul>
                      </div>
                  </div>
                  
                  <script>
                 var tdList = $('#tdlApp ul');
    var tdMask = 'tdl_';
 
    function showTasks(){
      var lsLen = localStorage.length;
      if(lsLen > 0){
        for(var i = 0; i < lsLen; i++){
          var key = localStorage.key(i);
          if(key.indexOf(tdMask) == 0){
            $('<li></li>').addClass('tdItem')
              .attr('data-itemid', key)
              .text(localStorage.getItem(key))
              .appendTo(tdList);
          }
        }
      }
    }
 
    showTasks();
 
    $('#tdlApp input').on('keydown',function(e){
      if(e.keyCode != 13)
        return;
      var str = e.target.value;
      e.target.value = "";
 
      if(str.length > 0){
        var nId = 0;
 
        tdList.children().each(function(index, el){
          var jelId = $(el).attr('data-itemid').slice(4);
          if(jelId > nId)
            nId = jelId;
        })
        nId++;
 
        localStorage.setItem(tdMask+nId,str);
 
        $('<li></li>').addClass('tdItem')
          .attr('data-itemid', tdMask+nId)
          .text(str).appendTo(tdList);
      }
    });
 
    $(document).on('click','.tdItem', function(e){
      var jet = $(e.target);
      localStorage.removeItem(jet.attr('data-itemid'));
      jet.remove();
    })
                  </script>
                  <input type="text" placeholder="Email" id="email" name="email"><br/>
                  <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br/>
                  <textarea placeholder="Введите сюда ваше сообщение" name="message" id="message"></textarea><br/>
                  <div id="message_show" >  </div>
                  <input type="button" id="done" name="done" value="Отправить"><br/>
                
              </div>   
         <?php require_once "blocks/right_col.php"?>
        </div>
        
       <?php require_once "blocks/footer.php"?>
  </body>
</html>