const mysql = require('mysql');
const info = {
       host : 'REDACTED',
       user : 'REDACTED',
       password : 'REDACTED',
       database : 'REDACTED'
};

module.exports = {
        init: function() {
               return mysql.createConnection(info);
        },
        connect: function(conn){
               conn.connect(function(err){
                        if(err) console.error('mysql connection error : ' + err);
                        else console.log('mysql is connected Successfully!');
                });
        }
}
