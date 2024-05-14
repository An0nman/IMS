document.addEventListener('DOMContentLoaded', function () {
    //calling elements by id
    const togglebtn = document.getElementById('togglebtn');
    const sidebar = document.getElementById('sidebar');
    const heading = document.getElementById('sidebar-heading');
    const userDetail = document.getElementById('user-details');
    const userDetailsName = document.getElementById('user-details-name');
    const sidebarMenulinks = document.getElementsByClassName('menulinks');
    const sidebarMenulinksText = document.getElementsByClassName('menulinksText');

    //styles for elements
    const userDetail_style_true = {
        flexDirection: 'column',
        fontSize: '1.2rem',
        transition: 'all 0.5s ease-in-out'
    }
    const userDetail_style_false = {
        flexDirection: '',
        fontSize: '',
        transition: 'all 0.5s ease-in-out'
    }
    const heading_style_true = {
        // width:'10px',
        fontSize: '2rem',
        // whitespace:'nowwarp'
    }
    const heading_style_false = {
        // width:'',
        fontSize: '',
        // whitespace:''
    }

    //functions for elements
    const hideSidebarMenuText = function () {
        for (let i = 0; i < sidebarMenulinksText.length; i++) {
            sidebarMenulinksText[i].style.display = 'none';
            sidebarMenulinks[i].style.textAlign = 'center';
            sidebarMenulinks[i].style.padding = '10px';
            sidebarMenulinks[i].style.width = '25px';
            sidebarMenulinks[i].style.borderRadius = '50%';
            sidebarMenulinks[i].style.marginLeft = '15%';
        }
    }
    const UnhideSidebarMenuText = function () {
        for (let i = 0; i < sidebarMenulinksText.length; i++) {
            sidebarMenulinksText[i].style.display = '';
            sidebarMenulinks[i].style.textAlign = '';
            sidebarMenulinks[i].style.padding = '';
            sidebarMenulinks[i].style.width = '';
            sidebarMenulinks[i].style.borderRadius = '';
            sidebarMenulinks[i].style.marginLeft = '';
        }
    }

    var togglebtn_state = true;
    //toggle button functions
    togglebtn.addEventListener('click', (event) => {
        event.preventDefault();
        if (!togglebtn_state) {
            sidebar.style.transition = 'all 0.3s ease-in-out';
            sidebar.style.width = '';
            userDetailsName.style.display = '';
            Object.assign(heading.style, heading_style_false);
            Object.assign(userDetail.style, userDetail_style_false);
            UnhideSidebarMenuText();
        }
        else {
            sidebar.style.transition = 'all 0.3s ease-in-out';
            sidebar.style.width = '6%';
            userDetailsName.style.display = 'none';
            Object.assign(heading.style, heading_style_true);
            Object.assign(userDetail.style, userDetail_style_true);
            hideSidebarMenuText();
        }
        togglebtn_state = !togglebtn_state;
    });
});
