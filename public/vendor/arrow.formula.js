document.addEventListener('DOMContentLoaded', function (event) {
     var tables = document.querySelector('table:not(.pathologists-table)');
     if (tables) {
         createMoreArrows(tables);
     }
     var formulas = document.querySelectorAll('.formula .math-tex');
     if (formulas) {
         createMoreArrows(formulas);
     }
});


 var ScrollController = (function ScrollController(scrollingElement) {

     var ongoingScroll = null;

     function scroll(direction) {
         if (!ongoingScroll) {
             return;
         }
         var totalScroll = 40;
         var totalInterval = 150;
         var scrollIntervals = 20;
         var scrollAmount = totalScroll / scrollIntervals;
         var tickTime = totalInterval / scrollIntervals;

         for (var i = 0; i < scrollIntervals; i++) {
             setTimeout(function () {
                 var left = scrollingElement.scrollLeft;
                 scrollingElement.scrollLeft = direction === 'left'
                     ? left - scrollAmount
                     : left + scrollAmount;
             }, tickTime * i);
         };

         setTimeout(function () {
             scroll(direction);
         }, totalInterval);
     }

     function startScroll(direction) {
         ongoingScroll = true;
         scroll(direction);
     }

     function stopScroll() {
         ongoingScroll = false;
     }

     function bind(element, direction) {
         element.addEventListener('mousedown', function (event) {
             event.stopPropagation();
             event.preventDefault();
             startScroll(direction);
         });
         element.addEventListener('touchstart', function (event) {
             event.stopPropagation();
             event.preventDefault();
             startScroll(direction);
         });
         element.addEventListener('mouseup', function (event) {
             event.stopPropagation();
             event.preventDefault();
             stopScroll();
         });
         element.addEventListener('touchend', function (event) {
             event.stopPropagation();
             event.preventDefault();
             stopScroll();
         });
     }

     return {
         scrollingElement: scrollingElement,
         bindLeft: function (element) { bind(element, 'left'); },
         bindRight: function (element) { bind(element, 'right'); },
         scrollLeft: function () { scroll('left'); },
         scrollRight: function () { scroll('right'); }
     };
 });


 /**
  * Following function called when the domcontent loaded everytime
  * to display the more arrows as well as formulas 
  * all called from the module/dochub/document.component.js
  */
 function createMoreArrows(elements) {
     for (var i = 0; i < elements.length; i++) {
         var element = elements[i];
         var parent = element.parentNode;
         var container = buildContainer(element);
         var left = buildLeftArrow(container);
         var right = buildRightArrow(container);
         parent.insertBefore(left, container);
         parent.insertBefore(right, container);

         // Setup events
         container.addEventListener('scroll', function (event) {
             updateArrowVisibility(left, right, container);
         });
         window.addEventListener('resize', function (event) {
             updateArrowVisibility(left, right, container);
         });

         //Set initial state
         updateArrowVisibility(left, right, container);
         var controller = new ScrollController(container);
         controller.bindLeft(left);
         controller.bindRight(right);
     }
 }



 /**
  * Function is called form the createMoreArrows
  * which will create the container to display arrows
  */
 function buildContainer(scrollingElement) {
     var container = document.createElement('div');
     container.className = 'scroll-container';
     scrollingElement.parentNode.insertBefore(container, scrollingElement);
     container.appendChild(scrollingElement);
     return container;
 }


 /**
  *
  * Function is called form the createMoreArrows
  * which will create the left arrow
  */
 function buildLeftArrow(scrollingElement) {
     var left = document.createElement('a');
     left.innerText = '‹ More';
     left.className = 'more-arrow left'
     return left;
 }


 /**
  *
  * Function is called form the createMoreArrows
  * which will create the right arrow
  */
 function buildRightArrow(scrollingElement) {
     var right = document.createElement('a');
     right.innerText = 'More ›';
     right.className = 'more-arrow right';
     return right;
 }



 /**
  *
  * Function is called form the createMoreArrows
  * which will hide/show the arrows based on the width of the container
  */
 function updateArrowVisibility(left, right, scrollingElement) {
     // Left
     if (scrollingElement.scrollLeft > 0) {
         left.className = 'more-arrow left show';
     } else {
         left.className = 'more-arrow left';
     }

     //Right
     var position = scrollingElement.clientWidth + scrollingElement.scrollLeft;
     if (scrollingElement.clientWidth == 0 || position >= scrollingElement.scrollWidth - 5) {
         right.className = 'more-arrow right'
     } else {
         right.className = 'more-arrow right show';
     }
 }

