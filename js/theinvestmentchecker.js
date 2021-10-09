$(".css-information").click(function() {
  let achieve = $("#achieve option:selected").val();
  let objectives = $("#objectives option:selected").val();
  let country = $("#country option:selected").val();
  let profit = $("#profit option:selected").val();

  if(achieve=='')
  {
    alert('Please select I\'m looking to achieve.');
    return false;
  }
  else if(objectives=='')
  {
    alert('Please select Personal objectives.');
    return false;
  }
  // else if(country=='')
  // {
  //   alert('Please select Country.');
  //   return false;
  // }
  else if (profit=='')
  {
    alert('Please select profit mode.');
    return false;
  }
  else
  {
    var keyword = getUrlParameter('keyword');
    if (keyword===undefined) keyword = '';
    var campaignid = getUrlParameter('campaignid');
    if (campaignid===undefined) campaignid = '';
    var device = getUrlParameter('device');
    if (device===undefined) device = '';
    var matchtype = getUrlParameter('matchtype');
    if (matchtype===undefined) matchtype = '';
    var creative = getUrlParameter('creative');
    if (creative===undefined) creative = '';
    var adgroupid = getUrlParameter('adgroupid');
    if (adgroupid===undefined) adgroupid = '';
    var feeditemid = getUrlParameter('feeditemid');
    if (feeditemid===undefined) feeditemid = '';
    var placement = getUrlParameter('placement');
    if (placement===undefined) placement = '';
    window.location.href= 'questionnaire.php?achieve='+achieve+'&objectives='+objectives+'&country='+country+'&profit='+profit+
    '&keyword='+keyword+
    '&campaignid='+campaignid+
    '&device='+device+
    '&matchtype='+matchtype+
    '&creative='+creative+
    '&adgroupid='+adgroupid+
    '&feeditemid='+feeditemid+
    '&placement='+placement;
  }
});

$(".css-reload").click(function() {
  location.reload(true);
});

var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = window.location.search.substring(1),
      sURLVariables = sPageURL.split('&'),
      sParameterName,
      i;

  for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
          return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
      }
  }
};