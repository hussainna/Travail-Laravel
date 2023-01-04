import './bootstrap';
import Echo from 'laravel-echo';
window.io=require('socket.io-client');

window.io=new Echo({
    broadcaster:'socket.io',
    host:window.location.Echo+':6001'
})