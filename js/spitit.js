var employee = [];
var managerShouldSay = true;
var mName;
var manager = [
            "OK",
            "Hows your day ?",
            "Sounds good",
            "I see.",
            "Let's talk offline about this.",
            "I will make note of this.",
            "You should be careful saying that"
        ];
        
function startChat() {
    $('#app').show();
    mName = $('#manager').val();
    if(mName === "") mName = "Manager";
}

function managerSays() {
    $('#conversation tr:last').after('<tr class="well"></td><td class="manager">' + mName +' -><td><td>' + manager[Math.floor((Math.random() * manager.length) + 1)] + '</td></tr>');
    $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    managerShouldSay = true;
}

function addRow() {
    var a = $('#msg');
    if(a.val() === "") return;
    $('#conversation tr:last').after('<tr class="well"><td class="client">' + a.val() + '</td><td> <-You<td></tr>');
    a.val('');
    $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    if(!managerShouldSay) return;
    setTimeout(function(){ managerSays();}, 1500);
    managerShouldSay = false;
}

function sendMsg() {
 if(event.keyCode == 13) {
        addRow();
    }
}

(function () {
$('#myModal').modal();
$('#save').on('click', function () {
    $('#myModal').modal('hide');
    startChat();
  });
$('#send').on('click', function () {
    addRow();
  });  
}())