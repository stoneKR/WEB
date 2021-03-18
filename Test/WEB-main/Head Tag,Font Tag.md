## HTML 기초 Header 태그와 Font 태그   

----------  
  
## Header 태그   
-----------   

+ Header 태그는 주로 본문 (body 태그) 내에서 제목을 나타내기 위해 사용합니다.  
+ head 태그와 혼동해서는 안됩니다.  
+ 태그 사용방법과 속성은 다음과 같습니다.  
```  
    Header 태그 사용 방법
     - <h숫자>내용</h숫자>
     - 숫자는 1~ 6 사이의 값을 사용한다.
     - 숫자가 작을수록 글자의 크기는 커진다.
     - 내용에 들어가는 글자는 진하게 표시된다.
     - 이 태그에는 줄바꿈기능이 있다.
```

> Header 태그 속성  
> -align : left, center, right 값을 이용 정렬한다.


## 예시) header태그.html   
-----------   
```
<body>

기본 글자
<h1 align="censer">Header태그1</h1>
<h2 align="right">Header태그2</h2>
<h3>header태그3</h3>
<h4>header태그4</h4>
<h5>header태그5</h5>
<h6>header태그6</h6>
```
  
### 예시 결과 
---------     
<body>

기본 글자
<h1 align="censer">Header태그1</h1>
<h2 align="right">Header태그2</h2>
<h3>header태그3</h3>
<h4>header태그4</h4>
<h5>header태그5</h5>
<h6>header태그6</h6>

    
## Font Tag       
---------   
+ font 태그는 글자색, 크기, 글자체 등을 지정하는 태그입니다.  
 
+ font 태그 속성은 다음과 같습니다.  

+ color : 글자의 색을 지정한다.  

+ size : 글자의 크기를 지정한다.  

+ 값은 보통 1~7 사이의 값을 설정할 수 있다.  
  
+ 보통 글자의 크기는 3이다.

+ face : 글자체를 지정한다.  

+ 글자체를 다중으로 설정할 수 있는데 이럴 때는 앞에서부터 글자체를 적용한다.  

+ 적용되는 글자체가 없으면 다음 글자체를 적용하는 방식으로 처리된다.  

예시) face="궁서,굴림"  

 
  
## 예시) font태그.html  
------------  
  
```
<body>
기본 글씨<br>
<font size ="1">font의 글자크기 1</font><br>
<font size ="2">font의 글자크기 2</font><br>
<font size ="3"color='blue'>font의 글자크기 3</font><br>
<font size ="4">font의 글자크기 4</font><br>
<font size ="5">font의 글자크기 5</font><br>
<font size ="6">font의 글자크기 6</font><br>
<font size ="7" face="궁서">font의 글자크기 7</font><br>
</body>
```

### 예시 결과  
  
<body>
기본 글씨<br>
<font size ="1">font의 글자크기 1</font><br>
<font size ="2">font의 글자크기 2</font><br>
<font size ="3"color='blue'>font의 글자크기 3</font><br>
<font size ="4">font의 글자크기 4</font><br>
<font size ="5">font의 글자크기 5</font><br>
<font size ="6">font의 글자크기 6</font><br>
<font size ="7" face="궁서">font의 글자크기 7</font><br>
</body>
