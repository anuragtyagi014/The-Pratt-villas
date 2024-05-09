jQuery(document).ready(function ($) {
  counterInfant(); // infants counter
  counterKidsAdult(); // kids and adults counter
});
/*
Adult Counter
*/
// function counterAdult() {
//   const max_adult = 8;
//   const max_kids = 7;
//   const max_infant = 4;
//   const max_kids_infant = 8;
//   let count_adult = 0;
//   $(".adult_number .fa-minus").click(function () {
//     if (count_adult > 1) {
//       count_adult--;
//     }
//     displayCount(count_adult);
//   });
//   $(".adult_number .fa-plus").click(function () {
//     if (count_adult < max_adult) {
//       count_adult++;
//     }
//     displayCount(count_adult);
//   });

//   function displayCount(count_adult) {
//     $(".adult_number span").text(count_adult);
//   }
// }


/*
Infants Counter
*/
function counterInfant() {
  const max_adult = 8;
  const max_kids = 7;
  const max_infant = 4;
  const max_kids_adult = 8;
  let count_infant = 0;
  $(".infant_number .fa-minus").click(function () {
    if (count_infant > 1) {
      count_infant--;
    }
    displayCount(count_infant);
  });
  $(".infant_number .fa-plus").click(function () {
    if (count_infant < max_infant) {
      count_infant++;
    }
    displayCount(count_infant);
  });

  function displayCount(count_infant) {
    $(".infant_number span").text(count_infant);
  }
}

/*
Adult and Kids Counter
*/
function counterKidsAdult() {
  const max_adult = 8;
  const max_kids = 7;
  const max_kids_adult = 8;
  let count_adult = 1; // Set the initial count of adults to 1
  let count_kids = 0;

  $(".adult_number .fa-minus").click(function () {
    if (count_adult > 1) { // Ensure that the count of adults doesn't go below 1
      count_adult--;
    }
    console.log(count_adult, count_kids, count_adult + count_kids);
    displayCountAdult(count_adult);
  });

  $(".adult_number .fa-plus").click(function () {
    if (count_adult + count_kids < max_kids_adult) {
      count_adult++;
    }
    console.log(count_adult, count_kids, count_adult + count_kids);
    displayCountAdult(count_adult);
  });

  function displayCountAdult(adultCount) {
    $(".adult_number span").text(adultCount);
  }

  $(".kids_number .fa-minus").click(function () {
    if (count_kids > 0) {
      count_kids--;
    }
    console.log(count_adult, count_kids, count_adult + count_kids);
    displayCountKids(count_kids);
  });

  $(".kids_number .fa-plus").click(function () {
    if (count_adult + count_kids < max_kids_adult) {
      count_kids++;
    }
    console.log(count_adult, count_kids, count_adult + count_kids);
    displayCountKids(count_kids);
  });

  function displayCountKids(kidsCount) {
    $(".kids_number span").text(kidsCount);
  }
}




/*
Kids and Infants Counter
*/
// function counterkidsInfant() {
//   // login for kids
//   const max_kids = 7;
//   const max_infant = 4;
//   const max_kids_infant = 8;
//   let count_kids = 0;
//   let count_infant = 0;
//   $(".kids_number .fa-minus").click(function () {
//     if (count_kids >= 1) {
//       count_kids--;
//     }
//     console.log(count_kids, count_infant, count_infant + count_kids);
//     displayCountKids(count_kids);
//   });
//   $(".kids_number .fa-plus").click(function () {
//     if (count_kids < max_kids) {
//       if (count_infant + count_kids < 8) {
//         count_kids++;
//       }
//     }
//     console.log(count_kids, count_infant, count_infant + count_kids);
//     displayCountKids(count_kids);
//   });

//   function displayCountKids(count_adult) {
//     $(".kids_number span").text(count_kids);
//   }

//   // login for infant

//   $(".infant_number .fa-minus").click(function () {
//     if (count_infant >= 1) {
//       count_infant--;
//     }
//     console.log(count_kids, count_infant, count_infant + count_kids);
//     displayCountInfant(count_infant);
//   });
//   $(".infant_number .fa-plus").click(function () {
//     if (count_infant < max_infant) {
//       if (count_infant + count_kids < 8) {
//         count_infant++;
//       }
//     }
//     console.log(count_kids, count_infant, count_infant + count_kids);
//     displayCountInfant(count_infant);
//   });

//   function displayCountInfant(count_adult) {
//     $(".infant_number span").text(count_infant);
//   }
// }
