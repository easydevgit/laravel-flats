import {RequestFlat} from "../types";

export const getFlats = async (flatInfo: RequestFlat) => {
    let baseUrl = `${import.meta.env.VITE_API_URL}/api/flats`
    const queryParams = new URLSearchParams();

    for (const prop in flatInfo) {
        if (flatInfo[prop]) {
            queryParams.append(prop, flatInfo[prop]);
        }
    }

    const requestUrl = `${baseUrl}?${queryParams}`;
    const response = await fetch(requestUrl);
    const allData = await response.json();
    return allData.data;
}
