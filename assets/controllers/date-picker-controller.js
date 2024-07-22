import {Controller} from '@hotwired/stimulus';
import Datepicker from 'flowbite-datepicker/Datepicker';

export default class extends Controller {
    connect() {
        let datePickerInput = document.querySelector('#modal [data-controller="date-picker"]');
        
        if (datePickerInput !== null) {
            let picker = new Datepicker(datePickerInput, {
                orientation: 'bottom',
                format: "yyyy-mm-dd",
                todayBtn: true,
                todayBtnMode: 1,
                todayHighlight: true,
                clearBtn: true,
                weekStart: 1,
                buttonClass: ''
            });
        }
    }
    
    disconnect() {
    }
}
