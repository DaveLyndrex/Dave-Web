$(document).ready(function () {



  randomNdx = [ $('#1'),$('#2'),$('#3'),$('#4'),$('#5'),$('#6'),$('#7'),$('#8'),$('#9'),$('#10    ')]
  randomizer = function () {
      $.ajax({
          url: 'https://jsonplaceholder.typicode.com/todos',
          datatype: 'json',
          success: function (data) {
              var index = Math.floor(Math.random() * data.length - 1);
              $("#1").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#2").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#3").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#4").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#5").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#6").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#7").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#8").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#9").text(data[index].title);
              var index = Math.floor(Math.random() * data.length - 1);
              $("#10").text(data[index].title);
          }
      });
      $("p").css("text-decoration", "none");
  };
  randomizer()      
  $('#genBtn').click(function () {
      randomizer()
  });
  $('p').bind('dblclick', function () {
      $(this).css("text-decoration", "line-through");
  })
  $('#insertBtn').click(function(){      
      var index = Math.floor(Math.random() * randomNdx.length - 1);
      randomNdx[index].text($('#insertTask').val())
  });
});