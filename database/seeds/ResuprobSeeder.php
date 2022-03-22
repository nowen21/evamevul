<?php

use App\Models\Backend\Administ\Probabil\Resuprob;
use App\Models\Motiresu;
use Illuminate\Database\Seeder;

class ResuprobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $motiresu=Motiresu::get(['id']);
        // foreach ($motiresu as $key => $motiresx) {
        //     $probabil=[1,4,7,10,13];
        //     foreach ($probabil as $key => $value) {
        //         Resuprob::create([
        //             'probabil_id'=>$value,
        //             'motiresu_id'=>$motiresx->id ,
        //          ]);
        //     }
        // }

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 1,]); //1
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 1,]); //2
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 1,]); //3
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 1,]); //4
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 1,]); //5

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 2,]); //6
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 2,]); //7
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 2,]); //8
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 2,]); //9
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 2,]); //10

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 3,]); //11
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 3,]); //12
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 3,]); //13
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 3,]); //14
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 3,]); //15

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 4,]); //16
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 4,]); //17
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 4,]); //18
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 4,]); //19
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 4,]); //20

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 5,]); //21
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 5,]); //22
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 5,]); //23
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 5,]); //24
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 5,]); //25

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 6,]); //26
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 6,]); //27
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 6,]); //28
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 6,]); //29
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 6,]); //30

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 7,]); //31
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 7,]); //32
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 7,]); //33
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 7,]); //34
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 7,]); //35

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 8,]); //36
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 8,]); //37
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 8,]); //38
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 8,]); //39
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 8,]); //40

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 9,]); //41
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 9,]); //42
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 9,]); //43
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 9,]); //44
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 9,]); //45

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 10,]); //46
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 10,]); //47
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 10,]); //48
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 10,]); //49
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 10,]); //50

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 11,]); //51
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 11,]); //52
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 11,]); //53
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 11,]); //54
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 11,]); //55

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 12,]); //56
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 12,]); //57
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 12,]); //58
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 12,]); //59
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 12,]); //60

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 13,]); //61
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 13,]); //62
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 13,]); //63
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 13,]); //64
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 13,]); //65

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 14,]); //66
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 14,]); //67
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 14,]); //68
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 14,]); //69
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 14,]); //70

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 15,]); //71
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 15,]); //72
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 15,]); //73
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 15,]); //74
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 15,]); //75

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 16,]); //76
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 16,]); //77
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 16,]); //78
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 16,]); //79
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 16,]); //80

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 17,]); //81
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 17,]); //82
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 17,]); //83
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 17,]); //84
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 17,]); //85

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 18,]); //86
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 18,]); //87
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 18,]); //88
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 18,]); //89
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 18,]); //90

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 19,]); //91
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 19,]); //92
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 19,]); //93
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 19,]); //94
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 19,]); //95

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 20,]); //96
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 20,]); //97
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 20,]); //98
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 20,]); //99
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 20,]); //100

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 21,]); //101
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 21,]); //102
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 21,]); //103
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 21,]); //104
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 21,]); //105

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 22,]); //106
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 22,]); //107
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 22,]); //108
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 22,]); //109
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 22,]); //110

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 23,]); //111
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 23,]); //112
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 23,]); //113
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 23,]); //114
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 23,]); //115

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 24,]); //116
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 24,]); //117
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 24,]); //118
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 24,]); //119
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 24,]); //120

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 25,]); //121
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 25,]); //122
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 25,]); //123
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 25,]); //124
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 25,]); //125

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 26,]); //126
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 26,]); //127
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 26,]); //128
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 26,]); //129
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 26,]); //130

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 27,]); //131
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 27,]); //132
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 27,]); //133
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 27,]); //134
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 27,]); //135

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 28,]); //136
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 28,]); //137
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 28,]); //138
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 28,]); //139
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 28,]); //140

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 29,]); //141
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 29,]); //142
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 29,]); //143
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 29,]); //144
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 29,]); //145

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 30,]); //146
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 30,]); //147
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 30,]); //148
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 30,]); //149
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 30,]); //150

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 31,]); //151
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 31,]); //152
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 31,]); //153
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 31,]); //154
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 31,]); //155

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 32,]); //156
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 32,]); //157
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 32,]); //158
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 32,]); //159
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 32,]); //160

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 33,]); //161
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 33,]); //162
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 33,]); //163
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 33,]); //164
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 33,]); //165

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 34,]); //166
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 34,]); //167
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 34,]); //168
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 34,]); //169
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 34,]); //170

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 35,]); //171
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 35,]); //172
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 35,]); //173
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 35,]); //174
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 35,]); //175

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 36,]); //176
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 36,]); //177
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 36,]); //178
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 36,]); //179
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 36,]); //180

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 37,]); //181
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 37,]); //182
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 37,]); //183
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 37,]); //184
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 37,]); //185

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 38,]); //186
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 38,]); //187
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 38,]); //188
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 38,]); //189
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 38,]); //190

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 39,]); //191
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 39,]); //192
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 39,]); //193
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 39,]); //194
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 39,]); //195

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 40,]); //196
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 40,]); //197
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 40,]); //198
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 40,]); //199
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 40,]); //200

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 41,]); //201
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 41,]); //202
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 41,]); //203
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 41,]); //204
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 41,]); //205

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 42,]); //206
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 42,]); //207
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 42,]); //208
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 42,]); //209
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 42,]); //210

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 43,]); //211
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 43,]); //212
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 43,]); //213
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 43,]); //214
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 43,]); //215

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 44,]); //216
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 44,]); //217
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 44,]); //218
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 44,]); //219
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 44,]); //220

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 45,]); //221
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 45,]); //222
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 45,]); //223
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 45,]); //224
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 45,]); //225

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 46,]); //226
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 46,]); //227
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 46,]); //228
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 46,]); //229
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 46,]); //230

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 47,]); //231
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 47,]); //232
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 47,]); //233
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 47,]); //234
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 47,]); //235

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 48,]); //236
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 48,]); //237
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 48,]); //238
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 48,]); //239
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 48,]); //240

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 49,]); //241
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 49,]); //242
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 49,]); //243
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 49,]); //244
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 49,]); //245

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 50,]); //246
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 50,]); //247
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 50,]); //248
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 50,]); //249
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 50,]); //250

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 51,]); //251
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 51,]); //252
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 51,]); //253
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 51,]); //254
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 51,]); //255

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 52,]); //256
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 52,]); //257
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 52,]); //258
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 52,]); //259
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 52,]); //260

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 53,]); //261
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 53,]); //262
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 53,]); //263
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 53,]); //264
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 53,]); //265

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 54,]); //266
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 54,]); //267
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 54,]); //268
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 54,]); //269
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 54,]); //270

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 55,]); //271
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 55,]); //272
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 55,]); //273
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 55,]); //274
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 55,]); //275

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 56,]); //276
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 56,]); //277
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 56,]); //278
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 56,]); //279
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 56,]); //280

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 57,]); //281
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 57,]); //282
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 57,]); //283
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 57,]); //284
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 57,]); //285

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 58,]); //286
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 58,]); //287
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 58,]); //288
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 58,]); //289
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 58,]); //290

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 59,]); //291
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 59,]); //292
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 59,]); //293
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 59,]); //294
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 59,]); //295

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 60,]); //296
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 60,]); //297
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 60,]); //298
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 60,]); //299
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 60,]); //300

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 61,]); //301
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 61,]); //302
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 61,]); //303
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 61,]); //304
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 61,]); //305

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 62,]); //306
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 62,]); //307
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 62,]); //308
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 62,]); //309
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 62,]); //310

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 63,]); //311
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 63,]); //312
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 63,]); //313
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 63,]); //314
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 63,]); //315

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 64,]); //316
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 64,]); //317
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 64,]); //318
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 64,]); //319
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 64,]); //320

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 65,]); //321
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 65,]); //322
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 65,]); //323
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 65,]); //324
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 65,]); //325

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 66,]); //326
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 66,]); //327
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 66,]); //328
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 66,]); //329
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 66,]); //330

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 67,]); //331
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 67,]); //332
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 67,]); //333
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 67,]); //334
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 67,]); //335

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 68,]); //336
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 68,]); //337
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 68,]); //338
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 68,]); //339
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 68,]); //340

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 69,]); //341
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 69,]); //342
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 69,]); //343
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 69,]); //344
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 69,]); //345

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 70,]); //346
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 70,]); //347
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 70,]); //348
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 70,]); //349
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 70,]); //350

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 71,]); //351
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 71,]); //352
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 71,]); //353
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 71,]); //354
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 71,]); //355

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 72,]); //356
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 72,]); //357
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 72,]); //358
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 72,]); //359
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 72,]); //360

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 73,]); //361
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 73,]); //362
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 73,]); //363
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 73,]); //364
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 73,]); //365

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 74,]); //366
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 74,]); //367
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 74,]); //368
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 74,]); //369
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 74,]); //370

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 75,]); //371
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 75,]); //372
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 75,]); //373
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 75,]); //374
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 75,]); //375

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 76,]); //376
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 76,]); //377
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 76,]); //378
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 76,]); //379
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 76,]); //380

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 77,]); //381
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 77,]); //382
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 77,]); //383
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 77,]); //384
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 77,]); //385

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 78,]); //386
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 78,]); //387
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 78,]); //388
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 78,]); //389
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 78,]); //390

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 79,]); //391
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 79,]); //392
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 79,]); //393
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 79,]); //394
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 79,]); //395

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 80,]); //396
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 80,]); //397
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 80,]); //398
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 80,]); //399
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 80,]); //400

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 81,]); //401
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 81,]); //402
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 81,]); //403
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 81,]); //404
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 81,]); //405

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 82,]); //406
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 82,]); //407
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 82,]); //408
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 82,]); //409
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 82,]); //410

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 83,]); //411
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 83,]); //412
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 83,]); //413
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 83,]); //414
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 83,]); //415

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 84,]); //416
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 84,]); //417
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 84,]); //418
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 84,]); //419
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 84,]); //420

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 85,]); //421
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 85,]); //422
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 85,]); //423
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 85,]); //424
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 85,]); //425

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 86,]); //426
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 86,]); //427
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 86,]); //428
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 86,]); //429
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 86,]); //430

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 87,]); //431
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 87,]); //432
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 87,]); //433
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 87,]); //434
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 87,]); //435

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 88,]); //436
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 88,]); //437
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 88,]); //438
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 88,]); //439
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 88,]); //440

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 89,]); //441
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 89,]); //442
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 89,]); //443
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 89,]); //444
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 89,]); //445

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 90,]); //446
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 90,]); //447
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 90,]); //448
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 90,]); //449
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 90,]); //450

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 91,]); //451
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 91,]); //452
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 91,]); //453
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 91,]); //454
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 91,]); //455

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 92,]); //456
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 92,]); //457
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 92,]); //458
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 92,]); //459
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 92,]); //460

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 93,]); //461
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 93,]); //462
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 93,]); //463
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 93,]); //464
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 93,]); //465

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 94,]); //466
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 94,]); //467
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 94,]); //468
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 94,]); //469
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 94,]); //470

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 95,]); //471
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 95,]); //472
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 95,]); //473
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 95,]); //474
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 95,]); //475

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 96,]); //476
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 96,]); //477
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 96,]); //478
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 96,]); //479
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 96,]); //480

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 97,]); //481
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 97,]); //482
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 97,]); //483
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 97,]); //484
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 97,]); //485

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 98,]); //486
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 98,]); //487
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 98,]); //488
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 98,]); //489
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 98,]); //490

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 99,]); //491
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 99,]); //492
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 99,]); //493
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 99,]); //494
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 99,]); //495

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 100,]); //496
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 100,]); //497
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 100,]); //498
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 100,]); //499
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 100,]); //500

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 101,]); //501
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 101,]); //502
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 101,]); //503
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 101,]); //504
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 101,]); //505

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 102,]); //506
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 102,]); //507
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 102,]); //508
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 102,]); //509
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 102,]); //510

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 103,]); //511
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 103,]); //512
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 103,]); //513
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 103,]); //514
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 103,]); //515

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 104,]); //516
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 104,]); //517
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 104,]); //518
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 104,]); //519
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 104,]); //520

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 105,]); //521
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 105,]); //522
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 105,]); //523
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 105,]); //524
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 105,]); //525

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 106,]); //526
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 106,]); //527
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 106,]); //528
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 106,]); //529
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 106,]); //530

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 107,]); //531
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 107,]); //532
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 107,]); //533
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 107,]); //534
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 107,]); //535

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 108,]); //536
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 108,]); //537
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 108,]); //538
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 108,]); //539
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 108,]); //540

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 109,]); //541
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 109,]); //542
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 109,]); //543
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 109,]); //544
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 109,]); //545

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 110,]); //546
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 110,]); //547
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 110,]); //548
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 110,]); //549
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 110,]); //550

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 111,]); //551
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 111,]); //552
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 111,]); //553
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 111,]); //554
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 111,]); //555

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 112,]); //556
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 112,]); //557
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 112,]); //558
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 112,]); //559
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 112,]); //560

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 113,]); //561
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 113,]); //562
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 113,]); //563
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 113,]); //564
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 113,]); //565

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 114,]); //566
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 114,]); //567
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 114,]); //568
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 114,]); //569
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 114,]); //570

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 115,]); //571
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 115,]); //572
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 115,]); //573
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 115,]); //574
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 115,]); //575

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 116,]); //576
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 116,]); //577
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 116,]); //578
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 116,]); //579
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 116,]); //580

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 117,]); //581
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 117,]); //582
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 117,]); //583
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 117,]); //584
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 117,]); //585

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 118,]); //586
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 118,]); //587
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 118,]); //588
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 118,]); //589
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 118,]); //590

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 119,]); //591
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 119,]); //592
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 119,]); //593
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 119,]); //594
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 119,]); //595

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 120,]); //596
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 120,]); //597
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 120,]); //598
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 120,]); //599
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 120,]); //600

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 121,]); //601
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 121,]); //602
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 121,]); //603
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 121,]); //604
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 121,]); //605

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 122,]); //606
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 122,]); //607
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 122,]); //608
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 122,]); //609
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 122,]); //610

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 123,]); //611
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 123,]); //612
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 123,]); //613
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 123,]); //614
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 123,]); //615

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 124,]); //616
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 124,]); //617
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 124,]); //618
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 124,]); //619
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 124,]); //620

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 125,]); //621
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 125,]); //622
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 125,]); //623
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 125,]); //624
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 125,]); //625

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 126,]); //626
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 126,]); //627
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 126,]); //628
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 126,]); //629
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 126,]); //630

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 127,]); //631
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 127,]); //632
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 127,]); //633
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 127,]); //634
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 127,]); //635

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 128,]); //636
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 128,]); //637
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 128,]); //638
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 128,]); //639
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 128,]); //640

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 129,]); //641
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 129,]); //642
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 129,]); //643
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 129,]); //644
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 129,]); //645

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 130,]); //646
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 130,]); //647
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 130,]); //648
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 130,]); //649
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 130,]); //650

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 131,]); //651
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 131,]); //652
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 131,]); //653
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 131,]); //654
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 131,]); //655

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 132,]); //656
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 132,]); //657
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 132,]); //658
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 132,]); //659
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 132,]); //660

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 133,]); //661
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 133,]); //662
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 133,]); //663
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 133,]); //664
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 133,]); //665

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 134,]); //666
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 134,]); //667
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 134,]); //668
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 134,]); //669
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 134,]); //670

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 135,]); //671
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 135,]); //672
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 135,]); //673
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 135,]); //674
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 135,]); //675

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 136,]); //676
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 136,]); //677
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 136,]); //678
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 136,]); //679
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 136,]); //680

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 137,]); //681
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 137,]); //682
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 137,]); //683
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 137,]); //684
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 137,]); //685

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 138,]); //686
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 138,]); //687
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 138,]); //688
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 138,]); //689
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 138,]); //690

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 139,]); //691
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 139,]); //692
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 139,]); //693
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 139,]); //694
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 139,]); //695

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 140,]); //696
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 140,]); //697
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 140,]); //698
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 140,]); //699
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 140,]); //700

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 141,]); //701
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 141,]); //702
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 141,]); //703
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 141,]); //704
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 141,]); //705

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 142,]); //706
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 142,]); //707
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 142,]); //708
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 142,]); //709
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 142,]); //710

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 143,]); //711
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 143,]); //712
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 143,]); //713
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 143,]); //714
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 143,]); //715

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 144,]); //716
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 144,]); //717
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 144,]); //718
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 144,]); //719
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 144,]); //720

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 145,]); //721
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 145,]); //722
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 145,]); //723
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 145,]); //724
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 145,]); //725

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 146,]); //726
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 146,]); //727
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 146,]); //728
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 146,]); //729
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 146,]); //730

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 147,]); //731
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 147,]); //732
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 147,]); //733
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 147,]); //734
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 147,]); //735

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 148,]); //736
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 148,]); //737
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 148,]); //738
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 148,]); //739
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 148,]); //740

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 149,]); //741
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 149,]); //742
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 149,]); //743
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 149,]); //744
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 149,]); //745

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 150,]); //746
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 150,]); //747
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 150,]); //748
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 150,]); //749
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 150,]); //750

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 151,]); //751
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 151,]); //752
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 151,]); //753
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 151,]); //754
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 151,]); //755

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 152,]); //756
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 152,]); //757
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 152,]); //758
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 152,]); //759
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 152,]); //760

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 153,]); //761
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 153,]); //762
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 153,]); //763
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 153,]); //764
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 153,]); //765

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 154,]); //766
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 154,]); //767
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 154,]); //768
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 154,]); //769
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 154,]); //770

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 155,]); //771
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 155,]); //772
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 155,]); //773
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 155,]); //774
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 155,]); //775

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 156,]); //776
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 156,]); //777
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 156,]); //778
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 156,]); //779
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 156,]); //780

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 157,]); //781
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 157,]); //782
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 157,]); //783
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 157,]); //784
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 157,]); //785

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 158,]); //786
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 158,]); //787
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 158,]); //788
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 158,]); //789
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 158,]); //790

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 159,]); //791
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 159,]); //792
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 159,]); //793
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 159,]); //794
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 159,]); //795

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 160,]); //796
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 160,]); //797
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 160,]); //798
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 160,]); //799
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 160,]); //800

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 161,]); //801
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 161,]); //802
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 161,]); //803
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 161,]); //804
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 161,]); //805

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 162,]); //806
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 162,]); //807
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 162,]); //808
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 162,]); //809
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 162,]); //810

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 163,]); //811
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 163,]); //812
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 163,]); //813
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 163,]); //814
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 163,]); //815

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 164,]); //816
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 164,]); //817
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 164,]); //818
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 164,]); //819
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 164,]); //820

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 165,]); //821
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 165,]); //822
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 165,]); //823
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 165,]); //824
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 165,]); //825

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 166,]); //826
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 166,]); //827
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 166,]); //828
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 166,]); //829
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 166,]); //830

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 167,]); //831
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 167,]); //832
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 167,]); //833
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 167,]); //834
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 167,]); //835

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 168,]); //836
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 168,]); //837
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 168,]); //838
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 168,]); //839
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 168,]); //840

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 169,]); //841
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 169,]); //842
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 169,]); //843
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 169,]); //844
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 169,]); //845

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 170,]); //846
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 170,]); //847
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 170,]); //848
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 170,]); //849
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 170,]); //850

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 171,]); //851
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 171,]); //852
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 171,]); //853
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 171,]); //854
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 171,]); //855

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 172,]); //856
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 172,]); //857
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 172,]); //858
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 172,]); //859
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 172,]); //860

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 173,]); //861
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 173,]); //862
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 173,]); //863
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 173,]); //864
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 173,]); //865

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 174,]); //866
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 174,]); //867
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 174,]); //868
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 174,]); //869
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 174,]); //870

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 175,]); //871
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 175,]); //872
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 175,]); //873
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 175,]); //874
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 175,]); //875

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 176,]); //876
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 176,]); //877
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 176,]); //878
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 176,]); //879
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 176,]); //880

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 177,]); //881
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 177,]); //882
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 177,]); //883
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 177,]); //884
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 177,]); //885

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 178,]); //886
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 178,]); //887
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 178,]); //888
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 178,]); //889
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 178,]); //890

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 179,]); //891
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 179,]); //892
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 179,]); //893
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 179,]); //894
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 179,]); //895

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 180,]); //896
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 180,]); //897
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 180,]); //898
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 180,]); //899
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 180,]); //900

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 181,]); //901
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 181,]); //902
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 181,]); //903
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 181,]); //904
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 181,]); //905

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 182,]); //906
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 182,]); //907
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 182,]); //908
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 182,]); //909
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 182,]); //910

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 183,]); //911
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 183,]); //912
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 183,]); //913
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 183,]); //914
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 183,]); //915

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 184,]); //916
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 184,]); //917
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 184,]); //918
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 184,]); //919
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 184,]); //920

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 185,]); //921
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 185,]); //922
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 185,]); //923
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 185,]); //924
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 185,]); //925

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 186,]); //926
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 186,]); //927
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 186,]); //928
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 186,]); //929
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 186,]); //930

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 187,]); //931
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 187,]); //932
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 187,]); //933
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 187,]); //934
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 187,]); //935

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 188,]); //936
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 188,]); //937
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 188,]); //938
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 188,]); //939
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 188,]); //940

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 189,]); //941
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 189,]); //942
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 189,]); //943
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 189,]); //944
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 189,]); //945

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 190,]); //946
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 190,]); //947
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 190,]); //948
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 190,]); //949
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 190,]); //950

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 191,]); //951
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 191,]); //952
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 191,]); //953
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 191,]); //954
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 191,]); //955

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 192,]); //956
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 192,]); //957
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 192,]); //958
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 192,]); //959
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 192,]); //960

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 193,]); //961
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 193,]); //962
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 193,]); //963
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 193,]); //964
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 193,]); //965

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 194,]); //966
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 194,]); //967
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 194,]); //968
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 194,]); //969
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 194,]); //970

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 195,]); //971
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 195,]); //972
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 195,]); //973
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 195,]); //974
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 195,]); //975

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 196,]); //976
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 196,]); //977
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 196,]); //978
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 196,]); //979
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 196,]); //980

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 197,]); //981
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 197,]); //982
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 197,]); //983
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 197,]); //984
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 197,]); //985

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 198,]); //986
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 198,]); //987
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 198,]); //988
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 198,]); //989
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 198,]); //990

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 199,]); //991
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 199,]); //992
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 199,]); //993
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 199,]); //994
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 199,]); //995

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 200,]); //996
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 200,]); //997
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 200,]); //998
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 200,]); //999
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 200,]); //1000

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 201,]); //1001
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 201,]); //1002
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 201,]); //1003
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 201,]); //1004
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 201,]); //1005

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 202,]); //1006
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 202,]); //1007
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 202,]); //1008
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 202,]); //1009
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 202,]); //1010

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 203,]); //1011
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 203,]); //1012
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 203,]); //1013
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 203,]); //1014
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 203,]); //1015

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 204,]); //1016
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 204,]); //1017
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 204,]); //1018
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 204,]); //1019
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 204,]); //1020

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 205,]); //1021
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 205,]); //1022
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 205,]); //1023
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 205,]); //1024
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 205,]); //1025

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 206,]); //1026
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 206,]); //1027
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 206,]); //1028
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 206,]); //1029
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 206,]); //1030

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 207,]); //1031
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 207,]); //1032
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 207,]); //1033
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 207,]); //1034
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 207,]); //1035

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 208,]); //1036
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 208,]); //1037
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 208,]); //1038
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 208,]); //1039
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 208,]); //1040

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 209,]); //1041
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 209,]); //1042
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 209,]); //1043
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 209,]); //1044
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 209,]); //1045

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 210,]); //1046
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 210,]); //1047
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 210,]); //1048
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 210,]); //1049
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 210,]); //1050

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 211,]); //1051
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 211,]); //1052
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 211,]); //1053
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 211,]); //1054
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 211,]); //1055

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 212,]); //1056
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 212,]); //1057
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 212,]); //1058
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 212,]); //1059
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 212,]); //1060

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 213,]); //1061
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 213,]); //1062
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 213,]); //1063
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 213,]); //1064
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 213,]); //1065

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 214,]); //1066
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 214,]); //1067
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 214,]); //1068
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 214,]); //1069
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 214,]); //1070

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 215,]); //1071
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 215,]); //1072
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 215,]); //1073
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 215,]); //1074
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 215,]); //1075

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 216,]); //1076
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 216,]); //1077
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 216,]); //1078
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 216,]); //1079
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 216,]); //1080

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 217,]); //1081
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 217,]); //1082
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 217,]); //1083
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 217,]); //1084
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 217,]); //1085

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 218,]); //1086
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 218,]); //1087
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 218,]); //1088
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 218,]); //1089
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 218,]); //1090

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 219,]); //1091
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 219,]); //1092
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 219,]); //1093
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 219,]); //1094
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 219,]); //1095

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 220,]); //1096
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 220,]); //1097
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 220,]); //1098
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 220,]); //1099
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 220,]); //1100

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 221,]); //1101
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 221,]); //1102
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 221,]); //1103
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 221,]); //1104
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 221,]); //1105

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 222,]); //1106
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 222,]); //1107
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 222,]); //1108
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 222,]); //1109
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 222,]); //1110

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 223,]); //1111
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 223,]); //1112
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 223,]); //1113
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 223,]); //1114
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 223,]); //1115

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 224,]); //1116
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 224,]); //1117
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 224,]); //1118
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 224,]); //1119
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 224,]); //1120

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 225,]); //1121
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 225,]); //1122
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 225,]); //1123
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 225,]); //1124
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 225,]); //1125

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 226,]); //1126
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 226,]); //1127
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 226,]); //1128
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 226,]); //1129
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 226,]); //1130

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 227,]); //1131
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 227,]); //1132
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 227,]); //1133
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 227,]); //1134
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 227,]); //1135

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 228,]); //1136
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 228,]); //1137
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 228,]); //1138
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 228,]); //1139
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 228,]); //1140

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 229,]); //1141
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 229,]); //1142
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 229,]); //1143
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 229,]); //1144
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 229,]); //1145

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 230,]); //1146
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 230,]); //1147
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 230,]); //1148
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 230,]); //1149
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 230,]); //1150

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 231,]); //1151
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 231,]); //1152
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 231,]); //1153
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 231,]); //1154
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 231,]); //1155

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 232,]); //1156
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 232,]); //1157
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 232,]); //1158
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 232,]); //1159
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 232,]); //1160

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 233,]); //1161
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 233,]); //1162
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 233,]); //1163
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 233,]); //1164
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 233,]); //1165

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 234,]); //1166
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 234,]); //1167
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 234,]); //1168
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 234,]); //1169
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 234,]); //1170

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 235,]); //1171
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 235,]); //1172
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 235,]); //1173
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 235,]); //1174
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 235,]); //1175

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 236,]); //1176
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 236,]); //1177
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 236,]); //1178
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 236,]); //1179
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 236,]); //1180

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 237,]); //1181
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 237,]); //1182
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 237,]); //1183
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 237,]); //1184
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 237,]); //1185

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 238,]); //1186
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 238,]); //1187
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 238,]); //1188
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 238,]); //1189
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 238,]); //1190

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 239,]); //1191
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 239,]); //1192
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 239,]); //1193
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 239,]); //1194
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 239,]); //1195

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 240,]); //1196
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 240,]); //1197
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 240,]); //1198
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 240,]); //1199
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 240,]); //1200

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 241,]); //1201
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 241,]); //1202
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 241,]); //1203
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 241,]); //1204
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 241,]); //1205

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 242,]); //1206
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 242,]); //1207
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 242,]); //1208
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 242,]); //1209
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 242,]); //1210

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 243,]); //1211
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 243,]); //1212
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 243,]); //1213
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 243,]); //1214
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 243,]); //1215

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 244,]); //1216
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 244,]); //1217
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 244,]); //1218
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 244,]); //1219
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 244,]); //1220

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 245,]); //1221
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 245,]); //1222
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 245,]); //1223
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 245,]); //1224
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 245,]); //1225

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 246,]); //1226
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 246,]); //1227
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 246,]); //1228
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 246,]); //1229
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 246,]); //1230

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 247,]); //1231
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 247,]); //1232
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 247,]); //1233
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 247,]); //1234
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 247,]); //1235

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 248,]); //1236
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 248,]); //1237
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 248,]); //1238
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 248,]); //1239
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 248,]); //1240

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 249,]); //1241
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 249,]); //1242
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 249,]); //1243
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 249,]); //1244
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 249,]); //1245

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 250,]); //1246
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 250,]); //1247
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 250,]); //1248
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 250,]); //1249
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 250,]); //1250

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 251,]); //1251
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 251,]); //1252
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 251,]); //1253
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 251,]); //1254
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 251,]); //1255

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 252,]); //1256
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 252,]); //1257
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 252,]); //1258
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 252,]); //1259
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 252,]); //1260

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 253,]); //1261
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 253,]); //1262
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 253,]); //1263
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 253,]); //1264
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 253,]); //1265

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 254,]); //1266
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 254,]); //1267
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 254,]); //1268
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 254,]); //1269
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 254,]); //1270

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 255,]); //1271
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 255,]); //1272
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 255,]); //1273
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 255,]); //1274
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 255,]); //1275

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 256,]); //1276
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 256,]); //1277
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 256,]); //1278
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 256,]); //1279
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 256,]); //1280

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 257,]); //1281
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 257,]); //1282
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 257,]); //1283
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 257,]); //1284
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 257,]); //1285

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 258,]); //1286
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 258,]); //1287
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 258,]); //1288
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 258,]); //1289
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 258,]); //1290

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 259,]); //1291
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 259,]); //1292
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 259,]); //1293
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 259,]); //1294
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 259,]); //1295

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 260,]); //1296
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 260,]); //1297
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 260,]); //1298
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 260,]); //1299
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 260,]); //1300

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 261,]); //1301
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 261,]); //1302
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 261,]); //1303
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 261,]); //1304
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 261,]); //1305

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 262,]); //1306
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 262,]); //1307
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 262,]); //1308
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 262,]); //1309
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 262,]); //1310

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 263,]); //1311
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 263,]); //1312
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 263,]); //1313
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 263,]); //1314
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 263,]); //1315

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 264,]); //1316
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 264,]); //1317
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 264,]); //1318
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 264,]); //1319
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 264,]); //1320

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 265,]); //1321
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 265,]); //1322
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 265,]); //1323
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 265,]); //1324
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 265,]); //1325

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 266,]); //1326
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 266,]); //1327
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 266,]); //1328
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 266,]); //1329
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 266,]); //1330

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 267,]); //1331
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 267,]); //1332
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 267,]); //1333
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 267,]); //1334
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 267,]); //1335

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 268,]); //1336
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 268,]); //1337
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 268,]); //1338
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 268,]); //1339
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 268,]); //1340

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 269,]); //1341
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 269,]); //1342
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 269,]); //1343
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 269,]); //1344
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 269,]); //1345

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 270,]); //1346
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 270,]); //1347
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 270,]); //1348
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 270,]); //1349
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 270,]); //1350

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 271,]); //1351
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 271,]); //1352
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 271,]); //1353
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 271,]); //1354
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 271,]); //1355

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 272,]); //1356
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 272,]); //1357
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 272,]); //1358
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 272,]); //1359
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 272,]); //1360

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 273,]); //1361
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 273,]); //1362
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 273,]); //1363
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 273,]); //1364
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 273,]); //1365

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 274,]); //1366
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 274,]); //1367
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 274,]); //1368
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 274,]); //1369
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 274,]); //1370

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 275,]); //1371
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 275,]); //1372
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 275,]); //1373
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 275,]); //1374
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 275,]); //1375

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 276,]); //1376
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 276,]); //1377
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 276,]); //1378
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 276,]); //1379
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 276,]); //1380

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 277,]); //1381
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 277,]); //1382
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 277,]); //1383
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 277,]); //1384
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 277,]); //1385

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 278,]); //1386
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 278,]); //1387
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 278,]); //1388
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 278,]); //1389
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 278,]); //1390

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 279,]); //1391
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 279,]); //1392
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 279,]); //1393
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 279,]); //1394
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 279,]); //1395

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 280,]); //1396
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 280,]); //1397
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 280,]); //1398
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 280,]); //1399
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 280,]); //1400

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 281,]); //1401
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 281,]); //1402
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 281,]); //1403
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 281,]); //1404
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 281,]); //1405

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 282,]); //1406
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 282,]); //1407
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 282,]); //1408
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 282,]); //1409
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 282,]); //1410

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 283,]); //1411
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 283,]); //1412
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 283,]); //1413
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 283,]); //1414
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 283,]); //1415

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 284,]); //1416
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 284,]); //1417
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 284,]); //1418
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 284,]); //1419
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 284,]); //1420

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 285,]); //1421
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 285,]); //1422
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 285,]); //1423
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 285,]); //1424
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 285,]); //1425

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 286,]); //1426
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 286,]); //1427
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 286,]); //1428
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 286,]); //1429
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 286,]); //1430

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 287,]); //1431
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 287,]); //1432
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 287,]); //1433
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 287,]); //1434
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 287,]); //1435

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 288,]); //1436
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 288,]); //1437
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 288,]); //1438
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 288,]); //1439
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 288,]); //1440

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 289,]); //1441
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 289,]); //1442
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 289,]); //1443
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 289,]); //1444
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 289,]); //1445

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 290,]); //1446
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 290,]); //1447
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 290,]); //1448
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 290,]); //1449
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 290,]); //1450

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 291,]); //1451
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 291,]); //1452
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 291,]); //1453
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 291,]); //1454
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 291,]); //1455

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 292,]); //1456
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 292,]); //1457
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 292,]); //1458
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 292,]); //1459
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 292,]); //1460

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 293,]); //1461
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 293,]); //1462
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 293,]); //1463
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 293,]); //1464
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 293,]); //1465

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 294,]); //1466
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 294,]); //1467
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 294,]); //1468
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 294,]); //1469
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 294,]); //1470

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 295,]); //1471
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 295,]); //1472
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 295,]); //1473
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 295,]); //1474
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 295,]); //1475

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 296,]); //1476
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 296,]); //1477
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 296,]); //1478
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 296,]); //1479
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 296,]); //1480

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 297,]); //1481
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 297,]); //1482
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 297,]); //1483
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 297,]); //1484
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 297,]); //1485

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 298,]); //1486
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 298,]); //1487
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 298,]); //1488
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 298,]); //1489
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 298,]); //1490

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 299,]); //1491
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 299,]); //1492
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 299,]); //1493
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 299,]); //1494
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 299,]); //1495

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 300,]); //1496
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 300,]); //1497
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 300,]); //1498
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 300,]); //1499
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 300,]); //1500

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 301,]); //1501
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 301,]); //1502
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 301,]); //1503
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 301,]); //1504
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 301,]); //1505

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 302,]); //1506
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 302,]); //1507
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 302,]); //1508
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 302,]); //1509
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 302,]); //1510

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 303,]); //1511
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 303,]); //1512
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 303,]); //1513
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 303,]); //1514
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 303,]); //1515

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 304,]); //1516
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 304,]); //1517
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 304,]); //1518
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 304,]); //1519
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 304,]); //1520

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 305,]); //1521
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 305,]); //1522
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 305,]); //1523
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 305,]); //1524
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 305,]); //1525

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 306,]); //1526
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 306,]); //1527
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 306,]); //1528
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 306,]); //1529
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 306,]); //1530

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 307,]); //1531
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 307,]); //1532
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 307,]); //1533
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 307,]); //1534
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 307,]); //1535

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 308,]); //1536
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 308,]); //1537
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 308,]); //1538
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 308,]); //1539
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 308,]); //1540

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 309,]); //1541
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 309,]); //1542
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 309,]); //1543
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 309,]); //1544
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 309,]); //1545

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 310,]); //1546
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 310,]); //1547
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 310,]); //1548
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 310,]); //1549
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 310,]); //1550

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 311,]); //1551
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 311,]); //1552
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 311,]); //1553
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 311,]); //1554
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 311,]); //1555

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 312,]); //1556
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 312,]); //1557
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 312,]); //1558
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 312,]); //1559
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 312,]); //1560

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 313,]); //1561
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 313,]); //1562
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 313,]); //1563
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 313,]); //1564
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 313,]); //1565

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 314,]); //1566
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 314,]); //1567
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 314,]); //1568
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 314,]); //1569
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 314,]); //1570

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 315,]); //1571
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 315,]); //1572
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 315,]); //1573
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 315,]); //1574
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 315,]); //1575

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 316,]); //1576
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 316,]); //1577
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 316,]); //1578
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 316,]); //1579
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 316,]); //1580

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 317,]); //1581
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 317,]); //1582
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 317,]); //1583
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 317,]); //1584
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 317,]); //1585

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 318,]); //1586
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 318,]); //1587
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 318,]); //1588
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 318,]); //1589
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 318,]); //1590

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 319,]); //1591
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 319,]); //1592
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 319,]); //1593
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 319,]); //1594
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 319,]); //1595

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 320,]); //1596
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 320,]); //1597
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 320,]); //1598
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 320,]); //1599
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 320,]); //1600

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 321,]); //1601
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 321,]); //1602
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 321,]); //1603
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 321,]); //1604
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 321,]); //1605

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 322,]); //1606
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 322,]); //1607
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 322,]); //1608
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 322,]); //1609
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 322,]); //1610

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 323,]); //1611
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 323,]); //1612
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 323,]); //1613
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 323,]); //1614
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 323,]); //1615

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 324,]); //1616
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 324,]); //1617
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 324,]); //1618
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 324,]); //1619
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 324,]); //1620

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 325,]); //1621
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 325,]); //1622
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 325,]); //1623
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 325,]); //1624
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 325,]); //1625

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 326,]); //1626
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 326,]); //1627
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 326,]); //1628
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 326,]); //1629
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 326,]); //1630

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 327,]); //1631
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 327,]); //1632
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 327,]); //1633
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 327,]); //1634
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 327,]); //1635

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 328,]); //1636
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 328,]); //1637
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 328,]); //1638
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 328,]); //1639
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 328,]); //1640

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 329,]); //1641
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 329,]); //1642
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 329,]); //1643
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 329,]); //1644
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 329,]); //1645

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 330,]); //1646
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 330,]); //1647
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 330,]); //1648
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 330,]); //1649
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 330,]); //1650

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 331,]); //1651
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 331,]); //1652
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 331,]); //1653
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 331,]); //1654
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 331,]); //1655

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 332,]); //1656
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 332,]); //1657
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 332,]); //1658
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 332,]); //1659
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 332,]); //1660

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 333,]); //1661
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 333,]); //1662
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 333,]); //1663
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 333,]); //1664
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 333,]); //1665

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 334,]); //1666
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 334,]); //1667
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 334,]); //1668
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 334,]); //1669
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 334,]); //1670

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 335,]); //1671
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 335,]); //1672
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 335,]); //1673
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 335,]); //1674
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 335,]); //1675

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 336,]); //1676
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 336,]); //1677
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 336,]); //1678
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 336,]); //1679
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 336,]); //1680

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 337,]); //1681
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 337,]); //1682
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 337,]); //1683
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 337,]); //1684
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 337,]); //1685

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 338,]); //1686
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 338,]); //1687
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 338,]); //1688
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 338,]); //1689
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 338,]); //1690

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 339,]); //1691
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 339,]); //1692
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 339,]); //1693
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 339,]); //1694
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 339,]); //1695

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 340,]); //1696
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 340,]); //1697
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 340,]); //1698
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 340,]); //1699
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 340,]); //1700

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 341,]); //1701
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 341,]); //1702
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 341,]); //1703
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 341,]); //1704
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 341,]); //1705

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 342,]); //1706
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 342,]); //1707
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 342,]); //1708
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 342,]); //1709
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 342,]); //1710

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 343,]); //1711
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 343,]); //1712
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 343,]); //1713
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 343,]); //1714
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 343,]); //1715

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 344,]); //1716
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 344,]); //1717
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 344,]); //1718
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 344,]); //1719
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 344,]); //1720

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 345,]); //1721
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 345,]); //1722
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 345,]); //1723
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 345,]); //1724
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 345,]); //1725

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 346,]); //1726
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 346,]); //1727
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 346,]); //1728
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 346,]); //1729
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 346,]); //1730

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 347,]); //1731
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 347,]); //1732
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 347,]); //1733
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 347,]); //1734
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 347,]); //1735

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 348,]); //1736
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 348,]); //1737
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 348,]); //1738
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 348,]); //1739
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 348,]); //1740

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 349,]); //1741
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 349,]); //1742
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 349,]); //1743
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 349,]); //1744
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 349,]); //1745

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 350,]); //1746
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 350,]); //1747
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 350,]); //1748
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 350,]); //1749
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 350,]); //1750

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 351,]); //1751
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 351,]); //1752
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 351,]); //1753
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 351,]); //1754
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 351,]); //1755

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 352,]); //1756
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 352,]); //1757
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 352,]); //1758
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 352,]); //1759
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 352,]); //1760

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 353,]); //1761
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 353,]); //1762
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 353,]); //1763
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 353,]); //1764
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 353,]); //1765

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 354,]); //1766
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 354,]); //1767
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 354,]); //1768
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 354,]); //1769
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 354,]); //1770

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 355,]); //1771
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 355,]); //1772
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 355,]); //1773
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 355,]); //1774
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 355,]); //1775

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 356,]); //1776
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 356,]); //1777
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 356,]); //1778
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 356,]); //1779
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 356,]); //1780

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 357,]); //1781
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 357,]); //1782
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 357,]); //1783
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 357,]); //1784
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 357,]); //1785

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 358,]); //1786
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 358,]); //1787
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 358,]); //1788
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 358,]); //1789
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 358,]); //1790

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 359,]); //1791
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 359,]); //1792
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 359,]); //1793
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 359,]); //1794
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 359,]); //1795

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 360,]); //1796
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 360,]); //1797
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 360,]); //1798
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 360,]); //1799
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 360,]); //1800

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 361,]); //1801
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 361,]); //1802
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 361,]); //1803
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 361,]); //1804
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 361,]); //1805

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 362,]); //1806
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 362,]); //1807
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 362,]); //1808
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 362,]); //1809
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 362,]); //1810

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 363,]); //1811
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 363,]); //1812
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 363,]); //1813
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 363,]); //1814
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 363,]); //1815

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 364,]); //1816
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 364,]); //1817
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 364,]); //1818
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 364,]); //1819
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 364,]); //1820

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 365,]); //1821
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 365,]); //1822
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 365,]); //1823
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 365,]); //1824
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 365,]); //1825

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 366,]); //1826
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 366,]); //1827
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 366,]); //1828
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 366,]); //1829
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 366,]); //1830

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 367,]); //1831
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 367,]); //1832
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 367,]); //1833
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 367,]); //1834
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 367,]); //1835

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 368,]); //1836
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 368,]); //1837
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 368,]); //1838
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 368,]); //1839
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 368,]); //1840

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 369,]); //1841
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 369,]); //1842
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 369,]); //1843
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 369,]); //1844
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 369,]); //1845

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 370,]); //1846
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 370,]); //1847
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 370,]); //1848
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 370,]); //1849
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 370,]); //1850

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 371,]); //1851
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 371,]); //1852
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 371,]); //1853
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 371,]); //1854
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 371,]); //1855

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 372,]); //1856
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 372,]); //1857
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 372,]); //1858
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 372,]); //1859
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 372,]); //1860

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 373,]); //1861
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 373,]); //1862
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 373,]); //1863
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 373,]); //1864
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 373,]); //1865

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 374,]); //1866
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 374,]); //1867
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 374,]); //1868
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 374,]); //1869
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 374,]); //1870

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 375,]); //1871
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 375,]); //1872
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 375,]); //1873
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 375,]); //1874
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 375,]); //1875

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 376,]); //1876
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 376,]); //1877
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 376,]); //1878
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 376,]); //1879
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 376,]); //1880

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 377,]); //1881
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 377,]); //1882
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 377,]); //1883
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 377,]); //1884
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 377,]); //1885

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 378,]); //1886
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 378,]); //1887
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 378,]); //1888
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 378,]); //1889
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 378,]); //1890

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 379,]); //1891
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 379,]); //1892
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 379,]); //1893
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 379,]); //1894
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 379,]); //1895

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 380,]); //1896
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 380,]); //1897
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 380,]); //1898
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 380,]); //1899
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 380,]); //1900

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 381,]); //1901
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 381,]); //1902
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 381,]); //1903
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 381,]); //1904
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 381,]); //1905

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 382,]); //1906
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 382,]); //1907
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 382,]); //1908
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 382,]); //1909
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 382,]); //1910

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 383,]); //1911
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 383,]); //1912
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 383,]); //1913
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 383,]); //1914
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 383,]); //1915

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 384,]); //1916
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 384,]); //1917
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 384,]); //1918
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 384,]); //1919
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 384,]); //1920

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 385,]); //1921
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 385,]); //1922
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 385,]); //1923
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 385,]); //1924
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 385,]); //1925

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 386,]); //1926
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 386,]); //1927
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 386,]); //1928
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 386,]); //1929
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 386,]); //1930

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 387,]); //1931
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 387,]); //1932
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 387,]); //1933
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 387,]); //1934
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 387,]); //1935

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 388,]); //1936
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 388,]); //1937
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 388,]); //1938
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 388,]); //1939
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 388,]); //1940

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 389,]); //1941
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 389,]); //1942
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 389,]); //1943
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 389,]); //1944
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 389,]); //1945

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 390,]); //1946
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 390,]); //1947
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 390,]); //1948
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 390,]); //1949
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 390,]); //1950

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 391,]); //1951
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 391,]); //1952
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 391,]); //1953
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 391,]); //1954
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 391,]); //1955

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 392,]); //1956
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 392,]); //1957
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 392,]); //1958
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 392,]); //1959
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 392,]); //1960

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 393,]); //1961
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 393,]); //1962
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 393,]); //1963
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 393,]); //1964
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 393,]); //1965

        Resuprob::create(['probabil_id' => 2, 'motiresu_id' => 394,]); //1966
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 394,]); //1967
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 394,]); //1968
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 394,]); //1969
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 394,]); //1970

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 395,]); //1971
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 395,]); //1972
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 395,]); //1973
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 395,]); //1974
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 395,]); //1975

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 396,]); //1976
        Resuprob::create(['probabil_id' => 4, 'motiresu_id' => 396,]); //1977
        Resuprob::create(['probabil_id' => 8, 'motiresu_id' => 396,]); //1978
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 396,]); //1979
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 396,]); //1980

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 397,]); //1981
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 397,]); //1982
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 397,]); //1983
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 397,]); //1984
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 397,]); //1985

        Resuprob::create(['probabil_id' => 1, 'motiresu_id' => 398,]); //1986
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 398,]); //1987
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 398,]); //1988
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 398,]); //1989
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 398,]); //1990

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 399,]); //1991
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 399,]); //1992
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 399,]); //1993
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 399,]); //1994
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 399,]); //1995

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 400,]); //1996
        Resuprob::create(['probabil_id' => 5, 'motiresu_id' => 400,]); //1997
        Resuprob::create(['probabil_id' => 7, 'motiresu_id' => 400,]); //1998
        Resuprob::create(['probabil_id' => 10, 'motiresu_id' => 400,]); //1999
        Resuprob::create(['probabil_id' => 13, 'motiresu_id' => 400,]); //2000

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 401,]); //2001
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 401,]); //2002
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 401,]); //2003
        Resuprob::create(['probabil_id' => 12, 'motiresu_id' => 401,]); //2004
        Resuprob::create(['probabil_id' => 14, 'motiresu_id' => 401,]); //2005

        Resuprob::create(['probabil_id' => 3, 'motiresu_id' => 402,]); //2006
        Resuprob::create(['probabil_id' => 6, 'motiresu_id' => 402,]); //2007
        Resuprob::create(['probabil_id' => 9, 'motiresu_id' => 402,]); //2008
        Resuprob::create(['probabil_id' => 11, 'motiresu_id' => 402,]); //2009
        Resuprob::create(['probabil_id' => 15, 'motiresu_id' => 402,]); //2010


    }
}
