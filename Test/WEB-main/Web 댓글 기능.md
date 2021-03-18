## 댓글 기능   
---------    
+ 댓글 기능을 사용하게 도와주는 사이트
  
```
1. DISQUS
2. LiveRe
```
   
## DISQUS 가입 (스팸검토 기능이 있는 댓글기능 지원 ) 
---------   
> 먼저 <a href="https://disqus.com/">디스커스</a>에 방문해서 계정을 생성한다.   
> 계정을 생겼으면 로그인을 해서 블로그에 댓글 서비스를 등록하기 절차를 진행해보자.  
1. GET STARTED 클릭으로 서비스 신청을 시작한다  
2. I want to install Disqus on my site를 선택한다.  
3. 정보 기입 후 Create Site 클릭  
4. Basic을 선택
5. 설정 화면이다. Website URL 항목은 블로그의 URL을 정확히 적어준다
6. 로그인 후 우측 상단에 톱니모양 클릭
7. add disqus to site 클릭
8. GET START 클릭
9. I want to install Disqus on my site 클릭
10. 작성 후 Create Site 클릭
11. 하단 Universal Code 버튼 클릭
12. 코드가 나오게 되는데 Copy 후 작성한 HTML 하단에 붙여넣기
13. 웹 서버를 이용해서 웹을 열어야 오류가 안남! (File로 시작하면 실패)


## 사용 예시    
----------
+ 바디 안에 단락으로 묶어서 넣기   

```

<!doctype html>
<html>
  <head>
    <title>HTML</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1><a href="index.html">index</a></h1>
    <ol>
     <li><a href="1.html">1.html</a></li>
     <li><a href="2.html">2.html</a></li>
     <li><a href="3.html">3.hmtl</a></li>
    </ol>



<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVWPFTphUHHsn2vaJttWm20PDcJ0GGW4N19w&usqp=CAU" alt="My Image">
  <p>

  <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://web2-wkqagbcfmx.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

  </p>

  </body>
</html>

```
다음과 같이 작성하게되면 밑에 사진처럼 나옴
<img src="https://github.com/stoneKR/WEB-/blob/main/web1/test.png?raw=true" alt="My Image">
