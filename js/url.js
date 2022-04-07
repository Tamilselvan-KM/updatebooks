let linkPage = document.getElementById('prevurl');
        linkPage.addEventListener('click', (e)=>{
        // e.preventDefault();
        let demourl = GetReferrer();
        // console.log(demourl);
        location.href = demourl;
    });
console.log(document.getElementById('prevurl'));
    function GetReferrer() {
          var preUrl = document.referrer;
          if (preUrl == null)
                 return;
           else
                 return preUrl;
        // console.log(preUrl);
}
