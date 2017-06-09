$.ajax({
    url:"api.cronofy.com/oauth/token",
    contentType:"application/json; charset=utf-8",
    "client_id": "GyhJvCQ1_bww5Cz84H2fwP8WUdQeiCWg",
    "client_secret": "WtQKZ6MUjSafU7O0It9h8vQb6lUJ_JPJqYmpvmTxicFWKRfLjfd6dcN5NU76fhAv-cX-7N3etuvzK89bFc5P0A",
    "grant_type": "authorization_code",
    "code": "iCuTVA8uikmp1J2HW117JLXZFusZWJIN",
    "redirect_uri": "https://google.com"
    
}).done(function(data){
    console.log(data);
});