setTimeout(function () {
    console.log("I've done my work");
}, 2000);

console.log("I'm waiting for all my work finish.")





var fs = require("fs")
fs.open(
    'info.txt',
    'r',
    function (err, handle) {
        var buf = new Buffer(100000);
        fs.read(
            handle,
            buf,
            0,
            100000,
            null,
            function (err, length) {
                console.log(buf.toString('utf-8', 0, length));
                file.close(file, function () {})
            }

        )
    }
)