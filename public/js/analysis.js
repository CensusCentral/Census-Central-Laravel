const showMenu = (headerToggle, navbarId) =>{
    const toggleBtn = document.getElementById(headerToggle),
    nav = document.getElementById(navbarId)
    
    // Validate that variables exist
    if(headerToggle && navbarId){
        toggleBtn.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
        })
    }
  }
  showMenu('header-toggle','sideBar')


const ctx = document.getElementById('myChart');
const years = [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019];
const values1 = [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478];
const values2 = [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000];
const values3 = [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100];

new Chart(ctx, {
  type: "line",
  data: {
    labels: years,
    datasets: [{
      data: values1,
      borderColor: "red",
      fill: false
    },{
      data: values2,
      borderColor: "green",
      fill: false
    },{
      data: values3,
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: { display: false },
    scales: {
      xAxes: [{
        scaleLabel: {
          display: true,
          labelString: 'Years'
        }
      }],
      yAxes: [{
        scaleLabel: {
          display: true,
          labelString: 'Values'
        }
      }]
    }
  }
});

const ctx2 = document.getElementById('myChart2');
const years2 = [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019];
const v1 = [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478];
const v2 = [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000];
const v3 = [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100];

new Chart(ctx2, {
  type: "line",
  data: {
    labels: years,
    datasets: [{
      data: v1,
      borderColor: "red",
      fill: false
    },{
      data: v2,
      borderColor: "green",
      fill: false
    },{
      data: v3,
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: { display: false },
    scales: {
      xAxes: [{
        scaleLabel: {
          display: true,
          labelString: 'Years'
        }
      }],
      yAxes: [{
        scaleLabel: {
          display: true,
          labelString: 'Values'
        }
      }]
    }
  }
});

