function show(){
    // document.write("show!")
    // 모듈 타입일때는 document.write() 사용 못함
    // 그래서 새로운 요소노드를 직접 만들어서 추가해야 함
    const e = document.createElement('h4')
    e.textContent = "show!!"
    document.body.appendChild(e)
}

// 다른 JS 에서 show()를 import 하게 하고 싶다면 반드시 내보내야 함.
// 하나의 .js안에서 여러개를 export 할 수 있음. 그 중에 반드시 1개는 default 키워드 필요
export default show

// 또 다른 함수도 export 해보기
export function addTextToBody(message){
    const e = document.createElement('h4')
    e.textContent = message
    document.body.appendChild(e)
}

// export default addTextToBody // ERROR - export default 는 문서에서 1개만 사용
// export addTextToBody // ERROR - default 가 없으면 함수선언하면서 export를 명시

// 변수나 상수도 export 가능함.
export const num = 100
export let age = 20

