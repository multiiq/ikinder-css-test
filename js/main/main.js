const form1 = document.querySelector("#form-1"); //이용약관 동의 div
        const form2 = document.querySelector("#form-2"); //기관정보입력 div
        const form3 = document.querySelector("#form-3"); //개인정보입력 div
        const nextBtn = document.querySelector("#nextBtn"); //다음버튼
        const previousBtn = document.querySelector("#previousBtn"); //이전버튼
        const joinBtn = document.querySelector("#joinBtn"); //가입버튼
        const title = document.querySelector("#title");
        
        //가입순서 번호
        const joinOrder1 = document.querySelector("#joinOrder-1");
        const joinOrder2 = document.querySelector("#joinOrder-2");
        const joinOrder3 = document.querySelector("#joinOrder-3");

        let cnt = 1;

        let reuslt;

        //이용약관 체크
        const agree_checked=()=>{
            // 1. checkbox element를 찾습니다.
           const checkbox = document.getElementById('chk_agree');

           // 2. checked 속성을 체크합니다.
           const is_checked = checkbox.checked;

           // 3. 결과를 출력합니다.
          if(is_checked){
            cnt=2;
            result=true;
          }else{
            alert("약관 동의는 필수입니다.");
            cnt=1;
            checkbox.focus();
            result=false;
          }
        }

        
        //다음버튼 함수
        const handleNextForm = () => {
          cnt++;
          if (cnt >= 1) {
            handleDisplay();
          }
        };
        nextBtn.addEventListener("click", handleNextForm);
        
        //이전버튼 함수
        const handlePreviousPage = () => {
          cnt--;
          console.log("이전" + cnt);
          if (cnt != 0) {
            handleDisplay();
          } else {
            location.href = "/join.html";
          }
        };
        previousBtn.addEventListener("click", handlePreviousPage);
  
        const handleDisplay = () => {
          if (cnt == 1) {
            title.innerText = "이용약관 동의";
            form2.classList.toggle("display-none");
            form3.classList.toggle("display-none");
            
            if (form3.style.display != "none") {
              form1.classList.remove("display-none");
              form2.classList.add("display-none");
              form3.classList.add("display-none");

              joinOrder1.classList.add("bg-color-dark");
              joinOrder2.classList.remove("bg-color-dark");
            }
          }
          if (cnt == 2) {
            agree_checked();
            if(result){
                title.innerText = "기관 정보 입력";
                form1.classList.toggle("display-none");
                form2.classList.toggle("display-none");

                joinOrder1.classList.toggle("bg-color-dark");
                joinOrder2.classList.toggle("bg-color-dark");
            

                if (form3.style.display != "none") {
                   form1.classList.add("display-none");
                   form3.classList.add("display-none");

                   joinOrder1.classList.remove("bg-color-dark");
                   joinOrder3.classList.remove("bg-color-dark");

                   nextBtn.classList.remove("display-none");
                   joinBtn.classList.add("display-none");
                }

            }
            
          }
          if (cnt == 3) {
            title.innerText = "개인 정보 입력";
            form2.classList.toggle("display-none");
            form3.classList.toggle("display-none");

            joinOrder2.classList.toggle("bg-color-dark");
            joinOrder3.classList.toggle("bg-color-dark");

            nextBtn.classList.toggle("display-none");
            joinBtn.classList.toggle("display-none");
          }
        };

        //가입버튼 함수
        const handleJoinForm = () => {
          location.href = "/main.html";
        };
  
        joinBtn.addEventListener("click", handleJoinForm);


        //기관명 시도
        const citySelect=(sidoCode)=>{
            $("#city").empty();
            if(sidoCode=='11'){
                for(const value in seoul){
                    console.log(seoul[0][seoul]);
                }
            }


        }