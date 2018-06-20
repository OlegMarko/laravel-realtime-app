const http = require('http').Server();
const io = require('socket.io')(http);
const Redis = require('ioredis');
const redis = new Redis();

const redisPort = 3000;

redis.subscribe('new-event');
redis.on('message', function (channel, message) {
    message = JSON.parse(message);

    io.emit(channel + ':' + message.event, message.data);
});

http.listen(redisPort, function () {
    console.log('Listening on port: ' + redisPort);
});
