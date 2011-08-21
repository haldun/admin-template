var hb = window.hb || {};

hb.decorateCarryList = function(container) {
  var container = $(container);
  var candidateList = $(".candidate-list", container);
  var selectedList = $(".selected-list", container);
  
  $("a.add", container).click(function(){
    return hb.carryOption(candidateList, selectedList);
  });
  
  $("a.remove", container).click(function(){
    return hb.carryOption(selectedList, candidateList);
  });
  
  $(candidateList).dblclick(function(){
    return hb.carryOption(candidateList, selectedList);
  });
  
  $(selectedList).dblclick(function(){
    return hb.carryOption(selectedList, candidateList);
  });
};

hb.carryOption = function(from, target) {
  var option = $(":selected", from);
  var target = $(target);
  
  if (!option.length) {
    return false;
  }
  
  var newOption = $("<option>").text(option.text())
                               .val(option.val())
                               .attr('originalIndex', option.index());
  var originalIndex = option.attr('originalIndex');
  if (originalIndex != undefined) {
    if (originalIndex == 0) {
      target.children(":eq(0)").before(newOption);
    } else {
      target.children(":eq(" + (originalIndex - 1) + ")").after(newOption);
    }
  } else {
    target.append(newOption);
  }
  option.remove();
  return false;
};
