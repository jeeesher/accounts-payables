import './bootstrap';

import moment from 'moment';
import Pikaday from 'pikaday';

window.Pikaday = Pikaday;
window.moment = moment;

const IARfileInput = document.getElementById('IAR-file-upload');
const IARselectedFileDisplay = document.getElementById('IAR-selected-file');

IARfileInput.addEventListener('change', (event) => {
    const IARselectedFile = event.target.files[0].name;

    if (IARselectedFile.length > 20) {
        IARselectedFileDisplay.textContent = IARselectedFile.substring(0,18) + '...'; 
    } else {
        IARselectedFileDisplay.textContent = IARselectedFile;
    }
});

const SRIDEfileInput = document.getElementById('SRIDE-file-upload');
const SRIDEselectedFileDisplay = document.getElementById('SRIDE-selected-file');

SRIDEfileInput.addEventListener('change', (event) => {
    const SRIDEselectedFile = event.target.files[0].name;

    if (SRIDEselectedFile.length > 20) {
        SRIDEselectedFileDisplay.textContent = SRIDEselectedFile.substring(0,18) + '...'; 
    } else {
        SRIDEselectedFileDisplay.textContent = SRIDEselectedFile;
    }
});

const RISfileInput = document.getElementById('RIS-file-upload');
const RISselectedFileDisplay = document.getElementById('RIS-selected-file');

RISfileInput.addEventListener('change', (event) => {
    const RISselectedFile = event.target.files[0].name;

    if (RISselectedFile.length > 20) {
        RISselectedFileDisplay.textContent = RISselectedFile.substring(0,18) + '...'; 
    } else {
        RISselectedFileDisplay.textContent = RISselectedFile;
    }
});

const DRfileInput = document.getElementById('DR-file-upload');
const DRselectedFileDisplay = document.getElementById('DR-selected-file');

DRfileInput.addEventListener('change', (event) => {
    const DRselectedFile = event.target.files[0].name;

    if (DRselectedFile.length > 20) {
        DRselectedFileDisplay.textContent = DRselectedFile.substring(0,18) + '...'; 
    } else {
        DRselectedFileDisplay.textContent = DRselectedFile;
    }
});

const SIfileInput = document.getElementById('SI-file-upload');
const SIselectedFileDisplay = document.getElementById('SI-selected-file');

SIfileInput.addEventListener('change', (event) => {
    const SIselectedFile = event.target.files[0].name;

    if (SIselectedFile.length > 20) {
        SIselectedFileDisplay.textContent = SIselectedFile.substring(0,18) + '...'; 
    } else {
        SIselectedFileDisplay.textContent = SIselectedFile;
    }
});

const CRPOfileInput = document.getElementById('CRPO-file-upload');
const CRPOselectedFileDisplay = document.getElementById('CRPO-selected-file');

CRPOfileInput.addEventListener('change', (event) => {
    const CRPOselectedFile = event.target.files[0].name;

    if (CRPOselectedFile.length > 20) {
        CRPOselectedFileDisplay.textContent = CRPOselectedFile.substring(0,18) + '...'; 
    } else {
        CRPOselectedFileDisplay.textContent = CRPOselectedFile;
    }
});

const BURfileInput = document.getElementById('BUR-file-upload');
const BURselectedFileDisplay = document.getElementById('BUR-selected-file');

BURfileInput.addEventListener('change', (event) => {
    const BURselectedFile = event.target.files[0].name;

    if (BURselectedFile.length > 20) {
        BURselectedFileDisplay.textContent = BURselectedFile.substring(0,18) + '...'; 
    } else {
        BURselectedFileDisplay.textContent = BURselectedFile;
    }
});