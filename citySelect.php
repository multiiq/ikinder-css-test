<?php

include_once("./_common.php");


$sidoCode   = $_POST['param'];
// 알맞은 동적 select box info 생성
$cityList = array();
$cityName = array();
$cityCode = array();
if ($sidoCode==11) {
    $cityName = array('중구',
                    '영등포구',
                    '중랑구',
                    '은평구',
                    '금천구',
                    '동작구',
                    '강남구',
                    '종로구',
                    '용산구',
                    '광진구',
                    '양천구',
                    '관악구',
                    '서대문구',
                    '마포구',
                    '성동구',
                    '강북구',
                    '서초구', 
                    '송파구',
                    '강동구',
                    '성북구',
                    '도봉구',
                    '노원구',
                    '강서구',
                    '구로구',
                    '동대문구');
    $cityCode = array('11140',
                    '11560',
                    '11260',
                    '11380',
                    '11545',
                    '11590',
                    '11680',
                    '11110',
                    '11170',
                    '11215',
                    '11470',
                    '11620',
                    '11410',
                    '11440',
                    '11200',
                    '11305',
                    '11650',
                    '11710',
                    '11740',
                    '11290',
                    '11320',
                    '11350',
                    '11500',
                    '11530',
                    '11230');
}
else if ($sidoCode==26) {
    $cityName = array('부산진구',
                    '사상구',
                    '서구',
                    '연제구',
                    '사하구',
                    '강서구',
                    '중구',
                    '동래구',
                    '수영구',
                    '동구',
                    '금정구',
                    '남구',
                    '영도구',
                    '해운대구',
                    '기장군',
                    '북구');
    $cityCode = array('26230',
                    '26530',
                    '26140',
                    '26470',
                    '26380',
                    '26440',
                    '26110',
                    '26260',
                    '26500',
                    '26170',
                    '26410',
                    '26290',
                    '26200',
                    '26350',
                    '26710',
                    '26320');
}
else if ($sidoCode==27) {
    $cityName = array('달성군',
                    '남구',
                    '서구',
                    '달서구',
                    '수성구',
                    '중구',
                    '북구',
                    '동구');
    $cityCode = array('27710',
                    '27200',
                    '27170',
                    '27290',
                    '27260',
                    '27110',
                    '27230',
                    '27140');
}
else if ($sidoCode==28) {
    $cityName = array('미추홀구',
                    '강화군',
                    '동구',
                    '옹진군',
                    '부평구',
                    '남동구',
                    '계양구',
                    '서구',
                    '연수구',
                    '중구');
    $cityCode = array('28177',
                    '28710',
                    '28140',
                    '28720',
                    '28237',
                    '28200',
                    '28245',
                    '28260',
                    '28185',
                    '28110');
}
else if ($sidoCode==29) {
    $cityName = array('북구',
                    '서구',
                    '남구',
                    '광산구',
                    '동구');
    $cityCode = array('29170',
                    '29140',
                    '29155',
                    '29200',
                    '29110');
}
else if ($sidoCode==30) {
    $cityName = array('대덕구',
                    '동구',
                    '서구',
                    '중구',
                    '유성구');
    $cityCode = array('30230',
                    '30110',
                    '30170',
                    '30140',
                    '30200');
}
else if ($sidoCode==31) {
    $cityName = array('중구',
                    '동구',
                    '남구',
                    '울주군',
                    '북구');
    $cityCode = array('31110',
                    '31170',
                    '31140',
                    '31710',
                    '31200');
}
else if ($sidoCode==36) {
    $cityName = array('세종특별자치시');
    $cityCode = array('36110');
}
else if ($sidoCode==41) {
    $cityName = array('수원시 장안구',
                    '파주시',
                    '의정부시',
                    '남양주시',
                    '오산시',
                    '시흥시',
                    '용인시 처인구',
                    '부천시',
                    '부천시 소사구',
                    '안성시',
                    '화성시',
                    '김포시',
                    '여주시',
                    '수원시 팔달구',
                    '수원시 영통구',
                    '안양시 동안구',
                    '광명시',
                    '평택시',
                    '안산시 상록구',
                    '안산시 단원구',
                    '양주시',
                    '연천군',
                    '수원시',
                    '동두천시',
                    '용인시 기흥구',
                    '포천시',
                    '양평군',
                    '안양시',
                    '의왕시',
                    '성남시',
                    '성남시 수정구',
                    '하남시',
                    '광주시',
                    '가평군',
                    '수원시 권선구',
                    '성남시 분당구',
                    '고양시 일산서구',
                    '과천시',
                    '구리시',
                    '군포시',
                    '용인시 수지구',
                    '이천시',
                    '안양시 만안구',
                    '고양시 덕양구',
                    '고양시 일산동구',
                    '성남시 중원구');
    $cityCode = array('41111',
                    '41480',
                    '41150',
                    '41360',
                    '41370',
                    '41390',
                    '41461',
                    '41190',
                    '41197',
                    '41550',
                    '41590',
                    '41570',
                    '41670',
                    '41115',
                    '41117',
                    '41173',
                    '41210',
                    '41220',
                    '41271',
                    '41273',
                    '41630',
                    '41800',
                    '41110',
                    '41250',
                    '41463',
                    '41650',
                    '41830',
                    '41170',
                    '41430',
                    '41130',
                    '41131',
                    '41450',
                    '41610',
                    '41820',
                    '41113',
                    '41135',
                    '41287',
                    '41290',
                    '41310',
                    '41410',
                    '41465',
                    '41500',
                    '41171',
                    '41281',
                    '41285',
                    '41133');
}
else if ($sidoCode==42) {
    $cityName = array('삼척시',
                    '영월군',
                    '고성군',
                    '춘천시',
                    '태백시',
                    '양구군',
                    '인제군',
                    '양양군',
                    '홍천군',
                    '정선군',
                    '강릉시',
                    '동해시',
                    '속초시',
                    '횡성군',
                    '평창군',
                    '화천군',
                    '원주시');
    $cityCode = array('42230',
                    '42750',
                    '42820',
                    '42110',
                    '42190',
                    '42800',
                    '42810',
                    '42830',
                    '42720',
                    '42770',
                    '42150',
                    '42170',
                    '42210',
                    '42730',
                    '42760',
                    '42790',
                    '42130',
                    '42780');
}
else if ($sidoCode==43) {
    $cityName = array('제천시',
                    '괴산군',
                    '보은군',
                    '청주시 상당구',
                    '청주시 청원구',
                    '영동군',
                    '청주시 흥덕구',
                    '증평군',
                    '음성군',
                    '단양군',
                    '충주시',
                    '옥천군',
                    '청주시 서원구',
                    '진천군');
    $cityCode = array('43150',
                    '43760',
                    '43720',
                    '43111',
                    '43114',
                    '43740',
                    '43113',
                    '43745',
                    '43770',
                    '43800',
                    '43130',
                    '43730',
                    '43112',
                    '43750');
}
else if ($sidoCode==44) {
    $cityName = array('보령시',
                    '홍성군',
                    '천안시 동남구',
                    '서산시',
                    '논산시',
                    '청양군',
                    '아산시',
                    '부여군',
                    '천안시 서북구',
                    '태안군',
                    '계룡시',
                    '당진시',
                    '예산군',
                    '공주시',
                    '금산군',
                    '서천군');
    $cityCode = array('44180',
                    '44800',
                    '44131',
                    '44210',
                    '44230',
                    '44790',
                    '44200',
                    '44760',
                    '44133',
                    '44825',
                    '44250',
                    '44270',
                    '44810',
                    '44150',
                    '44710',
                    '44770');
}
else if ($sidoCode==45) {
    $cityName = array('정읍시',
                    '고창군',
                    '임실군',
                    '전주시 완산구',
                    '군산시',
                    '순창군',
                    '부안군',
                    '전주시 덕진구',
                    '익산시',
                    '완주군',
                    '장수군',
                    '진안군',
                    '김제시',
                    '남원시',
                    '무주군');
    $cityCode = array('45180',
                    '45790',
                    '45750',
                    '45111',
                    '45130',
                    '45770',
                    '45800',
                    '45113',
                    '45140',
                    '45710',
                    '45740',
                    '45720',
                    '45210',
                    '45190',
                    '45730');
}
else if ($sidoCode==46) {
    $cityName = array('목포시',
                    '장성군',
                    '완도군',
                    '구례군',
                    '여수시',
                    '나주시',
                    '화순군',
                    '영광군',
                    '담양군',
                    '곡성군',
                    '고흥군',
                    '장흥군',
                    '무안군',
                    '보성군',
                    '해남군',
                    '광양시',
                    '영암군',
                    '신안군',
                    '강진군',
                    '진도군',
                    '함평군',
                    '순천시');
    $cityCode = array('46110',
                    '46880',
                    '46890',
                    '46730',
                    '46130',
                    '46170',
                    '46790',
                    '46870',
                    '46710',
                    '46720',
                    '46770',
                    '46800',
                    '46840',
                    '46780',
                    '46820',
                    '46230',
                    '46830',
                    '46910',
                    '46810',
                    '46900',
                    '46860',
                    '46150');
}
else if ($sidoCode==47) {
    $cityName = array('구미시',
                    '성주군',
                    '영덕군',
                    '고령군',
                    '칠곡군',
                    '예천군',
                    '울진군',
                    '봉화군',
                    '포항시 남구',
                    '영주시',
                    '경산시',
                    '군위군',
                    '청송군',
                    '청도군',
                    '울릉군',
                    '경주시',
                    '김천시',
                    '안동시',
                    '상주시',
                    '문경시',
                    '의성군',
                    '영양군',
                    '포항시',
                    '영천시',
                    '포항시 북구
');
    $cityCode = array('47190',
                    '47840',
                    '47770',
                    '47830',
                    '47850',
                    '47900',
                    '47930',
                    '47920',
                    '47111',
                    '47210',
                    '47290',
                    '47720',
                    '47750',
                    '47820',
                    '47940',
                    '47130',
                    '47150',
                    '47170',
                    '47250',
                    '47280',
                    '47730',
                    '47760',
                    '47110',
                    '47230',
                    '47113');
}
else if ($sidoCode==48) {
    $cityName = array('거제시',
                    '양산시',
                    '창녕군',
                    '고성군',
                    '함양군',
                    '사천시',
                    '의령군',
                    '산청군',
                    '합천군',
                    '창원시 의창구',
                    '통영시',
                    '밀양시',
                    '하동군',
                    '거창군',
                    '창원시',
                    '창원시 마산회원구',
                    '진주시',
                    '함안군',
                    '남해군',
                    '창원시 성산구',
                    '창원시 마산합포구',
                    '창원시 진해구',
                    '김해시');
    $cityCode = array('48310',
                    '48330',
                    '48740',
                    '48820',
                    '48870',
                    '48240',
                    '48720',
                    '48860',
                    '48890',
                    '48121',
                    '48220',
                    '48270',
                    '48850',
                    '48880',
                    '48120',
                    '48127',
                    '48170',
                    '48730',
                    '48840',
                    '48123',
                    '48125',
                    '48129',
                    '48250');
}
else if ($sidoCode==50) {
    $cityName = array('서귀포시','제주시');
    $cityCode = array('50130','50110');
}
$cityList = array($cityName, $cityCode);
echo json_encode($cityList);
?>

