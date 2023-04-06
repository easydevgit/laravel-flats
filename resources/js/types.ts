export type FlatsList = {
    id: number;
    name: string;
    bedroom: number;
    bathroom: number;
    storey: number;
    garage: number;
    price: number;
}

export type RequestFlat = {
    name?: string;
    bedroom?: number | string;
    bathroom?: number | string;
    storey?: number | string;
    garage?: number | string;
    minPrice?: number | string;
    maxPrice?: number | string;
}
