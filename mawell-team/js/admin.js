// admin-dashboard.js

import ApexCharts from "apexcharts";

import colors from "tailwindcss/colors";

var options = {
  series: [{ name: "This Month", data: [98, 85, 60, 80, 100, 150, 120] }],
  chart: { height: 90, type: "area", toolbar: { show: !1 } },
  grid: { show: false },
  legend: {
    show: false,
  },
  fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      inverseColors: !1,
      opacityFrom: 0.4,
      opacityTo: 0,
    },
  },
  dataLabels: { enabled: 0 },
  stroke: { curve: "stepline" },
  colors: [colors.orange[500]],
  xaxis: {
    labels: {
      show: false,
      fill: {
        color: "transparent",
      },
      axisBorder: {
        show: false,
      },
    },
  },
  yaxis: {
    show: false,
  },
};
var chart = new ApexCharts(
  document.querySelector("#today_revenue_chart"),
  options,
);
chart.render();

var options = {
  series: [{ name: "This Month", data: [110, 79, 72, 89, 120, 150, 140] }],
  chart: { height: 90, type: "area", toolbar: { show: !1 } },
  grid: { show: false },
  legend: {
    show: false,
  },
  fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      inverseColors: !1,
      opacityFrom: 0.4,
      opacityTo: 0,
    },
  },
  dataLabels: { enabled: 0 },
  stroke: { curve: "stepline" },
  colors: [colors.teal[500]],
  xaxis: {
    labels: {
      show: false,
      fill: {
        color: "transparent",
      },
      axisBorder: {
        show: false,
      },
    },
  },
  yaxis: {
    show: false,
  },
};
var chart = new ApexCharts(
  document.querySelector("#toda_product_sold_chart"),
  options,
);
chart.render();

var options = {
  series: [{ name: "This Month", data: [148, 100, 80, 92, 110, 160, 130] }],
  chart: { height: 90, type: "area", toolbar: { show: !1 } },
  grid: { show: false },
  legend: {
    show: false,
  },
  fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      inverseColors: !1,
      opacityFrom: 0.4,
      opacityTo: 0,
    },
  },
  dataLabels: { enabled: 0 },
  stroke: { curve: "stepline" },
  colors: [colors.sky[500]],
  xaxis: {
    labels: {
      show: false,
      fill: {
        color: "transparent",
      },
      axisBorder: {
        show: false,
      },
    },
  },
  yaxis: {
    show: false,
  },
};
var chart = new ApexCharts(
  document.querySelector("#today_new_customer_chart"),
  options,
);
chart.render();

var options = {
  series: [
    {
      name: "Sales",
      data: [35.5, 35.5, 36, 36, 36.5, 36.5, 36, 36, 36.5, 36.5, 36],
    },
  ],
  chart: {
    fontFamily: "inherit",
    type: "area",
    height: 400,
    toolbar: { show: false },
  },
  plotOptions: {},
  legend: { show: true },
  dataLabels: { enabled: false },
  fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.5,
      opacityTo: 0.2,
      stops: [0, 90, 120],
    },
  },
  stroke: { curve: "smooth", show: true, width: 3 },
  xaxis: {
    categories: [
      "Apr 01",
      "Apr 02",
      "Apr 03",
      "Apr 04",
      "Apr 05",
      "Apr 06",
      "Apr 07",
      "Apr 08",
      "Apr 09",
      "Apr 10",
      "Apr 11",
      "Apr 12",
      "Apr 13",
      "Apr 14",
      "Apr 15",
    ],
    axisBorder: { show: false },
    axisTicks: { show: false },
    crosshairs: {
      position: "front",
      stroke: { color: colors.orange[500], width: 2 },
    },
    tooltip: {
      enabled: !0,
      formatter: void 0,
      offsetY: 0,
      style: { fontSize: "12px" },
    },
  },
  yaxis: {
    max: 37.3,
    min: 34,
    tickAmount: 8,
    labels: {
      style: { colors: colors.orange[500], fontSize: "12px" },
      formatter: function (e) {
        return "$" + parseInt(10 * e);
      },
    },
  },
  states: {
    normal: { filter: { type: "none", value: 0 } },
    hover: { filter: { type: "none", value: 0 } },
    active: {
      allowMultipleDataPointsSelection: !1,
      filter: { type: "none", value: 0 },
    },
  },
  colors: [colors.orange[500]],
  grid: {
    borderColor: colors.orange[500],
    strokeDashArray: 6,
    yaxis: { lines: { show: true } },
  },
  markers: {
    strokeColor: colors.orange[500],
    strokeWidth: 6,
    strokeOpacity: 0.6,
  },
};
var chart = new ApexCharts(document.querySelector("#revenue_chart"), options);
chart.render();
