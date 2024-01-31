import Authenticated from "@/Layouts/Authenticated/Index";
import { Head } from "@inertiajs/react";

export default function Dashboard(){
    return (
        <>
            <Head title="Dashboard" />
            <Authenticated />
        </>
    );
}