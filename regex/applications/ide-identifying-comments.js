var Regex_Pattern = /\/\*(\**)[^\*]+(?:\s)*(\**)\*\/|(?=\/\/).+(?=\n)/g;
function processData(input) {
    var output = input.match(Regex_Pattern);
    output.forEach(function(entry) {
        console.log(entry);
    });
} 

process.stdin.resume();
process.stdin.setEncoding("ascii");
_input = "";
process.stdin.on("data", function (input) {
    _input += input;
});

process.stdin.on("end", function () {
   processData(_input);
});
