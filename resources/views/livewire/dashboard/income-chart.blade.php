<div class="col-span-2 mt-10 h-80 w-full lg:w-[470px] border-10 bg-gray-900 rounded-lg">
  <div class="flex justify-between">
      <p class="mt-4 ml-5 font-bold text-white">{{ $judul}}</p>
     <select id="time-frame" name="time-frame" class="mt-4 block mr-5 w-20 px-2 py-1 text-xs text-white bg-gray-800 border border-stone-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
         <option value="this-week">Minggu Ini</option>
         <option value="this-month">Bulan Ini</option>
         <option value="this-year">Tahun Ini</option>
     </select>
  </div>
     
 
 <div id="{{ $chart }}"></div>
</div>


<script>
  var options = {
        series: [{
          name: "Desktops",
          data: @json($data)
      }],
        chart: {
        height: 260,
        type: 'line',
        zoom: {
          enabled: false
        },
        toolbar: { 
          show: false // Menghilangkan burger icon
      }
      },
      colors: [@json($colors)],
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 2,
        curve: 'straight'
      },
      grid: {
        row: {
          colors: [], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        categories: @json($categories),
        labels: {
                  style: {
                      colors: 'white', // Warna teks sumbu X
                      fontSize: '11px',
                  }
              }
      },
      yaxis: {
              labels: {
                  style: {
                      colors: 'white', // Warna teks sumbu Y
                      fontSize: '11px',
                      fontWeight: 'bold'
                  }
              }
          },
      };

      var chart = new ApexCharts(document.querySelector("#" + @json($chart)), options);
      chart.render();
</script>

