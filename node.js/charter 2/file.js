var fs = require("fs")
fs.open(
    'c:/Users/wu_ha/Desktop/learn/front-end/node.js/charter 2/info.txt',
    'r',
    function (err, fd) {
        var buf = new Buffer(100000);
        fs.read(
            fd,
            buf,
            0,
            100000,
            null,
            function (err, length) {
                console.log(buf.toString('utf-8', 0, length));
                fs.close(fd, function () {})
            }

        )
    }
)