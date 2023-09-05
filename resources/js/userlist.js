

new Chart(document.getElementById("pie-chart"), {
    type: "pie",
    data: {
        labels: ["A", "B", "C", "D"],
        datasets: [
            {
                backgroundColor: [
                    "#003366",
                    "#336699",
                    "#99ccff",
                    "#ccccff",
                    "#f2f3f5",
                ],
                data: [9, 7, 2, 4],
            },
        ],
    },
    options: {
        plugins: {
            legend: {
                display: true,
                position: "right",
                labels: {
                    color: "rgb(0, 0, 0)",
                },
            },
        },
    },
});
